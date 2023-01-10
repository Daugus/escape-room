<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HangmanSolution;

class HangmanSolutionController extends Controller
{
    public function getWord()
    {

        // $data = HangmanSolution::hangman_solutions('posts')
        //     ->select('posts.id', 'posts.name', 'posts.title')
        //     ->inRandomOrder()
        //     ->limit(5)
        //     ->get();

        return response()->json(['microorganism' => 'Clostridium botulinum']);
    }
}
