<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

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

    public function filter(Request $request)
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
