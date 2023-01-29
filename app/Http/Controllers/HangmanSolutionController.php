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
        $solutions = HangmanSolution::orderBy('id', 'desc')->paginate(25);
        return view('pruebas.hangman.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function show(HangmanSolution $hangmanSolution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function edit(HangmanSolution $hangmanSolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HangmanSolution $hangmanSolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HangmanSolution  $hangmanSolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(HangmanSolution $hangmanSolution)
    {
        //
    }
}
