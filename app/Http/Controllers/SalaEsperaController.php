<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\UserGroup;
use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalaEsperaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('sala-espera.index');
    }

    public function createGroup(Request $request)
    {
        $userGroup = Group::query()->insert('name');
        $userGroup->save();
    }

    public function userGroup(Request $request)
    {
        $userGroup = Group::query()->insert('name');
        $userGroup->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert en user group y despues insert en game con la dificulty
        $difficulty = Game::query()->insert('difficulty_id');
        $difficulty->save();
    }

    public function getUser(Request $request)
    {
        $data = User::query()->select('nickname', 'picture')
            ->where(DB::raw('LOWER(nickname)'), $request->nickname)
            ->limit(1)
            ->get();

        return response()->json($data);
    }
}
