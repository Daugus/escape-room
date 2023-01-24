<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
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
}
