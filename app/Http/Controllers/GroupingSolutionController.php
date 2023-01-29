<?php

namespace App\Http\Controllers;

use App\Models\GroupingSolution;
use Illuminate\Http\Request;

class GroupingSolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solutions = GroupingSolution::orderBy('field', 'asc')->orderBy('concept', 'asc')->paginate(15);
        return view('pruebas.agrupando.index', compact('solutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pruebas.agrupando.create');
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
            'field' => 'required',
            'concept' => 'required|unique:grouping_solutions|max:50',
        ]);

        $solution = new GroupingSolution($request->all());
        $solution->save();

        return redirect()->action([GroupingSolutionController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GroupingSolution  $GroupingSolution
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return redirect()->action([GroupingSolutionController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupingSolution  $GroupingSolution
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solution = GroupingSolution::findOrFail($id);
        return view('pruebas.agrupando.edit', compact('solution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GroupingSolution  $GroupingSolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'field' => 'required',
            'concept' => 'required|max:50',
        ]);

        $solution = GroupingSolution::findOrFail($id);

        $solution->field = $request->field;
        $solution->concept = $request->concept;

        $solution->save();

        return redirect()->action([GroupingSolutionController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupingSolution  $GroupingSolution
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $solution = GroupingSolution::findOrFail($id);
        $solution->delete();

        return redirect()->action([GroupingSolutionController::class, 'index']);
    }
}
