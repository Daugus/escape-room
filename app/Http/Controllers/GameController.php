<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// modelos para apis
use Illuminate\Database\Eloquent\Collection;
use App\Models\SharedSolution;
use App\Models\GroupingSolution;
use App\Models\HangmanSolution;

// controlador para todas las vistas y apis para el juego
class GameController extends Controller
{
    // laboratorio
    public function lab()
    {
        return view('laboratorio.index');
    }

    // prueba 4: equilibrado
    public function equilibrado()
    {
        return view('equilibrado.index');
    }

    public function getFormulas()
    {
        $data = SharedSolution::query()->where('challenge_id', '=', '4')
            ->inRandomOrder()
            ->limit(4)
            ->get();

        return response()->json($data);
    }

    // prueba 5: agrupando
    public function agrupando()
    {
        return view('agrupando.index');
    }

    public function getConcepts()
    {

        $fields = ['análisis', 'biotecnología', 'medida', 'microbiología'];

        $data = new Collection();

        foreach ($fields as $field) {
            $data = $data->merge(GroupingSolution::query()
                ->where('field', '=', $field)
                ->inRandomOrder()
                ->limit(5)
                ->get());
        }

        return response()->json($data);
    }

    // prueba 3: hangman
    public function hangman()
    {
        return view('hangman.index');
    }

    public function getWord()
    {
        $data = HangmanSolution::query()->inRandomOrder()->limit(1)->get();

        return response()->json($data);
    }

    // prueba 2: kukú
    public function kuku()
    {
        return view('kuku.index');
    }

    public function getCards()
    {
        $data = SharedSolution::query()->select('id', 'question AS name', 'answer AS image')
            ->where('challenge_id', '=', '2')
            ->inRandomOrder()
            ->limit(9)
            ->get();

        return response()->json($data);
    }

    // prueba 1: cada oveja con su pareja
    public function oveja()
    {
        return view('oveja.index');
    }

    public function getIncubationMethods()
    {
        $data = SharedSolution::query()->select('id', 'question AS concept', 'answer AS definition')
            ->where('challenge_id', '=', '1')
            ->inRandomOrder()
            ->limit(6)
            ->get();

        return response()->json($data);
    }
}
