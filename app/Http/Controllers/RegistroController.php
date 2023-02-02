<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistroController extends Controller
{
    /**
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
        //

        $user = new User($request->all());

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
