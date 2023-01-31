<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

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


        if (isset($request->picture)) {
            $nickname = $user->nickname;
            $fileName = $nickname . '.' . $request->picture->extension();
            $request->picture->move(public_path('src/img/users'), $fileName);
            $user->picture = $fileName;
        }

        $user->save();
        return redirect('/login');
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
        session()->flush();
        return redirect('/');
    }

    public function edit()
    {
        return view('perfil.edit', ['user' => session('user')]);
    }

    public function update(Request $request)
    {

        $validaciones = [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'nickname' => 'required|max:255|unique:users,nickname,' . session('user')->id,
            'password' => 'required|max:255',
            'email' => 'required|max:255|unique:users,email,' . session('user')->id,
        ];

        //comprobante de si es una archivo valido 
        $fileChanged = $request->fileChanged === 'true';
        if ($fileChanged) $validaciones['picture'] = 'mimes:jpg,png,webp';

        $request->validate($validaciones);

        $user = User::findOrFail(session('user')->id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->nickname = $request->nickname;
        $user->email = $request->email;

        //comprobante de si el archivo a cambiado 
        if ($fileChanged) {
            if ($request->previousFileName !== "user.png") {
                $ruta = public_path('src/img/users/' . $request->previousFileName);
                if (file_exists($ruta)) File::delete($ruta);
            }

            $nickname = $user->nickname;
            $fileName = $nickname . '.' . $request->picture->extension();
            $request->picture->move(public_path('src/img/users'), $fileName);
            $user->picture = $fileName;
        }

        $user->save();
        session(['user' => $user]);

        return redirect()->action([UserController::class, 'show']);
    }

    public function destroy()
    {
        $user = User::findOrFail(session('user')->id);

        $picture = $user->picture;

        if ($picture !== 'user.png') {
            $ruta = public_path('src/img/users/' . $picture);
            if (file_exists($ruta)) File::delete($ruta);
        }

        $user->delete();
        session()->flush();

        return redirect('/');
    }
}
