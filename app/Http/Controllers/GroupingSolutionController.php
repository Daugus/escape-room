<?php

namespace App\Http\Controllers;

use App\Models\GroupingSolution;
use Illuminate\Http\Request;

class GroupingSolutionController extends Controller
{
    public function index()
    {
        $solutions = GroupingSolution::orderBy('field', 'asc')->orderBy('concept', 'asc')->paginate(8);
        return view('pruebas.agrupando.index', compact('solutions'));
    }

    public function create()
    {
        return view('pruebas.agrupando.create');
    }

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

    public function show()
    {
        return redirect()->action([GroupingSolutionController::class, 'index']);
    }

    public function edit($id)
    {
        $solution = GroupingSolution::findOrFail($id);
        return view('pruebas.agrupando.edit', compact('solution'));
    }

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

    public function destroy($id)
    {
        $solution = GroupingSolution::findOrFail($id);
        $solution->delete();

        return redirect()->action([GroupingSolutionController::class, 'index']);
    }
}
