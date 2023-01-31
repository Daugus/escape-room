<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;
use App\Models\UserGroup;

// controlador para todas las vistas y apis para el juego
class RankingController extends Controller
{
    // laboratorio
    public function index($userCount = 4, $difficulty = '')
    {
        //         SELECT
        //     user_group.id as ugid,
        //     users.id as uid
        // FROM
        //     `user_group`
        // INNER JOIN `users` ON `user_group`.`user_id` = `users`.`id`
        // group BY ugid
        // HAVING
        //      COUNT(uid) <= 4;
        $groups = UserGroup::join('users', 'user_group.user_id', 'users.id')
            ->selectRaw('count(users.id) AS user_count, user_group.id, users.id')
            ->whereRaw("user_count <= $userCount")
            ->get();

        $games = Game::where('state', 'ganada')
            ->orderBy('time', 'asc')
            ->join('difficulties', 'games.difficulty_id', 'difficulties.id')
            ->join('groups', 'games.group_id', 'groups.id')
            ->join('user_group', 'groups.id', 'user_group.group_id')
            ->where('difficulty_id', 'like',  "%$difficulty%")
            ->paginate(8);

        return view('ranking.index', compact('games'));
    }
}
