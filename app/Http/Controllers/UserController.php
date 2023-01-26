<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function show()
    {
        return view('perfil.index');
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registro.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'nickname' => 'required|max:255|unique:users',
            'password' => 'required|max:255',
            'email' => 'required|max:255|unique:users',
            'picture' => 'mimes:jpg,png,webp'
        ]);

        $user = new User($request->all());
        $user->password = bcrypt($user->password);

        $nickname = $user->nickname;

        if (isset($request->picture)) {
            $fileName = $nickname . '.' . $request->picture->extension();
            $request->picture->move(public_path('src/img/users'), $fileName);
            $user->picture = $fileName;
        }

        $user->save();
        return print("guarda");
    }

    public function login()
    {
        return view('login.index');
    }

    public function validateLogin(Request $request)
    {
        $request->validate([
            'nickname' => 'required|max:255',
            'password' => 'required|max:255',
        ]);

        $usuarioEnviado = new User($request->all());

        $user = User::query()->where('nickname', $usuarioEnviado->nickname)->first();

        if (isset($user) && Hash::check($usuarioEnviado->password, $user->password)) {
            session(['user' => $user]);
            return redirect('/');
        } else {
            return back()->onlyInput('nickname');
        }
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
