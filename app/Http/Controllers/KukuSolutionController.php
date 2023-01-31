<?php

namespace App\Http\Controllers;

use App\Models\SharedSolution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KukuSolutionController extends Controller
{
    public function index()
    {
        $solutions = SharedSolution::where('challenge_id', '2')->orderBy('id', 'desc')->paginate(3);
        return view('pruebas.kuku.index', compact('solutions'));
    }

    public function create()
    {
        return view('pruebas.kuku.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'formula' => 'required|mimes:jpg,png,webp',
        ]);

        $solution = new SharedSolution();
        $solution->question = $request->name;
        $solution->challenge_id = 2;

        $file = strtolower(preg_replace('/[()., ]/', '-', $solution->question));

        $fileName = $file . '.' . $request->formula->extension();
        $request->formula->move(public_path('src/img/kuku/formulas'), $fileName);
        $solution->answer = $fileName;

        $solution->save();

        return redirect()->action([KukuSolutionController::class, 'index']);
    }

    public function show()
    {
        return redirect()->action([KukuSolutionController::class, 'index']);
    }

    public function edit($id)
    {
        $solution = SharedSolution::findOrFail($id);
        return view('pruebas.kuku.edit', compact('solution'));
    }

    public function update(Request $request, $id)
    {
        // por defecto solo valida el nombre,
        // en caso de que se haya cambiado la imagen, esta también se valida
        $validaciones = ['name' => 'required|max:50'];

        $fileChanged = $request->fileChanged === 'true';
        if ($fileChanged) $validaciones['formula'] = 'required|mimes:jpg,png,webp';

        $request->validate($validaciones);

        $solution = SharedSolution::findOrFail($id);
        $solution->question = $request->name;

        if ($fileChanged) {
            // borra la imagen original
            $ruta = public_path('src/img/kuku/formulas/' . $request->previousFileName);
            if (file_exists($ruta)) File::delete($ruta);

            $file = strtolower(preg_replace('/[()., ]/', '-', $solution->question));

            $fileName = $file . '.' . $request->formula->extension();
            $request->formula->move(public_path('src/img/kuku/formulas'), $fileName);
            $solution->answer = $fileName;
        }

        $solution->save();

        return redirect()->action([KukuSolutionController::class, 'index']);
    }

    public function destroy($id)
    {
        $solution = SharedSolution::findOrFail($id);

        $ruta = public_path('src/img/kuku/formulas/' . $solution->answer);
        if (file_exists($ruta)) File::delete($ruta);

        $solution->delete();

        return redirect()->action([KukuSolutionController::class, 'index']);
    }
}
