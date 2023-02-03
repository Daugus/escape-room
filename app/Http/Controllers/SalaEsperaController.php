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
        return view('sala-espera.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group = new Group();
        $group->name = $request->groupName;

        $group->save();

        $userIds = $request->userIds;

        foreach ($userIds as $userId) {
            $user_group = new UserGroup();
            $user_group->group_id = $group->id;
            $user_group->user_id = $userId;

            $user_group->save();
        }

        $game = new Game();
        $game->state = 'cancelada';
        $game->difficulty_id = $request->difficulty;
        $game->group_id = $group->id;

        $game->save();

        return json_encode(['id' => $game->id]);
    }

    public function update(Request $request)
    {
        $game = Game::findOrFail($request->game_id);
        $game->state = $request->state;

        $game->save();
    }

    public function getUser(Request $request)
    {
        $data = User::query()->select('id', 'nickname', 'picture')
            ->where(DB::raw('LOWER(nickname)'), $request->nickname)
            ->limit(1)
            ->get();

        return response()->json($data);
    }
}
