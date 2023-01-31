<?php

namespace App\Http\Controllers;

use App\Models\SharedSolution;
use Illuminate\Http\Request;

class OvejaSolutionController extends Controller
{
    public function index()
    {
        $solutions = SharedSolution::where('challenge_id', '1')->orderBy('question', 'asc')->paginate(6);
        return view('pruebas.oveja.index', compact('solutions'));
    }

    public function create()
    {
        return view('pruebas.oveja.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'concept' => 'required|max:50',
            'definition' => 'required|max:250',
        ]);

        $solution = new SharedSolution();
        $solution->question = $request->concept;
        $solution->answer = $request->definition;
        $solution->challenge_id = 1;
        $solution->save();

        return redirect()->action([OvejaSolutionController::class, 'index']);
    }

    public function show()
    {
        return redirect()->action([OvejaSolutionController::class, 'index']);
    }

    public function edit($id)
    {
        $solution = SharedSolution::findOrFail($id);
        return view('pruebas.oveja.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'concept' => 'required|max:50',
            'definition' => 'required|max:250',
        ]);

        $solution = SharedSolution::findOrFail($id);

        $solution->question = $request->concept;
        $solution->answer = $request->definition;

        $solution->save();

        return redirect()->action([OvejaSolutionController::class, 'index']);
    }

    public function destroy($id)
    {
        $solution = SharedSolution::findOrFail($id);
        $solution->delete();

        return redirect()->action([OvejaSolutionController::class, 'index']);
    }
}
