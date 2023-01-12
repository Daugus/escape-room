<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HangmanSolution;

class HangmanSolutionController extends Controller
{
    public function getWord()
    {

        // $data = HangmanSolution::select('SELECT * FROM hangman_solutions LIMIT 1');
        $data = HangmanSolution::query()->inRandomOrder()->limit(1)->get();
        // $data = HangmanSolution::hangman_solutions('posts')
        //     ->select('microorganism')
        //     ->inRandomOrder()
        //     ->limit(1)
        //     ->get();

        return response()->json($data);
    }
}
