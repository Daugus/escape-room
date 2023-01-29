<?php

namespace App\Http\Controllers;

use App\Models\HangmanSolution;
use Illuminate\Http\Request;

class HangmanSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = HangmanSolution::orderBy('id', 'asc')->paginate(15);
        return view('pruebas.hangman.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pruebas.hangman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'microorganism' => 'required|unique:hangman_solutions|max:50'
        ]);

        $solution = new HangmanSolution($request->all());
        $solution->save();

        return redirect()->action([HangmanSolutionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect()->action([HangmanSolutionController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solution = HangmanSolution::findOrFail($id);
        return view('pruebas.hangman.edit', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solution = HangmanSolution::findOrFail($id);
        $solution->delete();

        return redirect()->action([HangmanSolutionController::class, 'index']);
    }
}
