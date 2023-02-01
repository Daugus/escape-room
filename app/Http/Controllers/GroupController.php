<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Game;
use App\Models\Group;
use App\Models\User;

// controlador para todas las vistas y apis para el juego
class GroupController extends Controller
{
    private $userCount = '';
    private $difficulty = '';

    public function index()
    {
        $games = $this->query();
        return view('ranking.index', [
            'games' => $games,
            'options' => [
                'userCount' => '',
                'difficulty' => '',
            ]
        ]);
    }

    public function filterIndex(Request $request)
    {
        $games = $this->query($request->userCount, $request->difficulty);
        return view(
            'ranking.index',
            [
                'games' => $games,
                'options' => [
                    'userCount' => $request->userCount,
                    'difficulty' => $request->difficulty
                ]
            ]
        );
    }

    public function show($id)
    {
        $group = Group::findOrFail($id);
        $users = User::select('u.nickname', 'u.picture')
            ->fromRaw('users AS u')
            ->join(DB::raw('user_group AS ug'), 'u.id', 'ug.user_id')
            ->where('ug.group_id', $id)
            ->get();

        return view('ranking.show', ['group' => $group, 'users' => $users]);
    }

    private function query($userCount = '', $difficulty = '')
    {
        $this->userCount = $userCount;
        $this->difficulty = $difficulty;

        return Game::selectRaw('groups.name AS group_name, difficulties.name AS diff_name, games.*')
            ->join('groups', 'games.group_id', 'groups.id')
            ->join('difficulties', 'games.difficulty_id', 'difficulties.id')
            ->where('games.state', 'ganada')
            ->whereRaw("games.difficulty_id like '%$this->difficulty%'")
            ->whereIn('games.group_id', function ($query) {
                $query->select('group_id')
                    ->from('user_group')
                    ->join('users', 'user_group.group_id', 'users.id')
                    ->groupBy('user_group.group_id')
                    ->havingRaw("count(users.id) like '%$this->userCount%'")
                    ->get();
            })
            ->orderBy('games.time', 'ASC')
            ->paginate(8);
    }
}
