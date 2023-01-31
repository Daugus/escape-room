<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Game;

// controlador para todas las vistas y apis para el juego
class RankingController extends Controller
{
    // laboratorio
    public function index()
    {
        $games = Game::where('state', 'ganada')->orderBy('time', 'asc')->paginate(8);
        return view('ranking.index', compact('games'));
    }
}
