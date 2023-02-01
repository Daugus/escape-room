<?php

namespace App\Http\Controllers;

use App\Models\HangmanSolution;
use Illuminate\Http\Request;

class HangmanSolutionController extends Controller
{
    public function index()
    {
        $solutions = HangmanSolution::orderBy('microorganism', 'asc')->paginate(8);
        return view('pruebas.hangman.index', compact('solutions'));
    }

    public function create()
    {
        return view('pruebas.hangman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'microorganism' => 'required|unique:hangman_solutions|max:50',
        ]);

        $solution = new HangmanSolution($request->all());
        $solution->save();

        return redirect()->action([HangmanSolutionController::class, 'index']);
    }

    public function show()
    {
        return redirect()->action([HangmanSolutionController::class, 'index']);
    }

    public function edit($id)
    {
        $solution = HangmanSolution::findOrFail($id);
        return view('pruebas.hangman.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'microorganism' => 'required|unique:hangman_solutions|max:50'
        ]);

        $solution = HangmanSolution::findOrFail($id);

        $solution->microorganism = $request->microorganism;

        $solution->save();

        return redirect()->action([HangmanSolutionController::class, 'index']);
    }

    public function destroy($id)
    {
        $solution = HangmanSolution::findOrFail($id);
        $solution->delete();

        return redirect()->action([HangmanSolutionController::class, 'index']);
    }
}
