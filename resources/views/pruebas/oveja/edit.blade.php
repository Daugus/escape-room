@extends('layouts.master')

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('oveja.update', $solution->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-10">
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4" for="concept">Concepto:</label>
                <input class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" type="text" name="concept" id="concept" placeholder="Concepto"
                    value="{{ old('concept', $solution->question) }}" maxlength="50">

                @error('concept')
                    <p class="appearance-none w-full text-red-600 border rounded py-3 px-4">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4" for="definition">Definición:</label>
                <textarea class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" name="definition" id="definition" placeholder="Definición" maxlength="250">{{ old('definition', $solution->answer) }}</textarea>

                @error('definition')
                    <p class=" appearance-none w-full text-red-600 border rounded py-3 px-4">{{ $message }}</p>
                @enderror
            </div>

            <button class="mt-3 flex items-center justify-center appearance-none  text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" type="submit">Guardar</button>
        </form>
    </div>
@endsection
