@extends('layouts.master')

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('agrupando.update', $solution->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-10">
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4" for="field">Campo:</label>
                <select class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" name="field" id="field">
                    <option value="-" selected disabled>-</option>
                    <option value="análisis" @selected(old('field', $solution->field) === 'análisis')>Análisis</option>
                    <option value="biotecnología" @selected(old('field', $solution->field) === 'biotecnología')>Biotecnología</option>
                    <option value="medida" @selected(old('field', $solution->field) === 'medida')>Medida</option>
                    <option value="microbiología" @selected(old('field', $solution->field) === 'microbiología')>Microbiología</option>
                </select>

                @error('field')
                    <p class="appearance-none w-full text-red-600 border rounded py-3 px-4">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4" for="concept">Concepto:</label>
                <input class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" type="text" name="concept" id="concept" placeholder="Concepto"
                    value="{{ old('concept', $solution->concept) }}" maxlength="50">

                @error('concept')
                    <p class=" appearance-none w-full text-red-600 border rounded py-3 px-4">{{ $message }}</p>
                @enderror
            </div>

            <button class="mt-3 flex items-center justify-center appearance-none  text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" type="submit">Guardar</button>
        </form>
    </div>
@endsection
