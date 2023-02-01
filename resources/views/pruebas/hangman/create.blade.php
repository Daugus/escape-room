@extends('layouts.master')

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('hangman.store') }}" method="POST">
            @csrf

            <div class="mb-10">
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4" for="microorganism">Nombre microorganismo:</label>
                <input class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" type="text" name="microorganism" id="microorganism" placeholder="Microorganismo"
                    value="{{ old('microorganism') }}" maxlength="50">

                @error('microorganism')
                    <p class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4">{{ $message }}</p>
                @enderror
            </div>

            <button class="mt-3 flex items-center justify-center appearance-none  text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" type="submit">Guardar</button>
        </form>
    </div>
@endsection
