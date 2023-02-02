@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/image-preview.js'])
@endsection

@section('content')
<div class="absolute top-28 right-40">
            <button class="bg-amber-500 text-white font-bold py-2 px-4 rounded">
                <a href={{ route ('kuku.index')}} >Volver</a>
            </button>
        </div>
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('kuku.update', $solution->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-10">
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4"
                    for="name">Nombre:</label>
                <input class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" type="text"
                    name="name" id="name" placeholder="Nombre" value="{{ old('name', $solution->question) }}"
                    maxlength="50">

                @error('name')
                    <p class="appearance-none w-full text-red-600 border rounded py-3 px-4">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4"
                    for="formula">Fórmula:</label>
                <input class="bg-neutral-100 appearance-none w-full text-gray-700 border rounded py-3 px-4" type="file"
                    name="formula" id="formula" placeholder="Fórmula" accept=".jpg,.jpeg,.png"
                    value="{{ old('formula', $solution->answer) }}">

                <div id="preview-container">
                    @if (old('formula') === null)
                        <img src="{{ asset('src/img/kuku/formulas/' . $solution->answer) }}" class="h-32"
                            id="image-preview">
                    @endif
                </div>

                @error('formula')
                    <p class="appearance-none w-full text-red-600 border rounded py-3 px-4">{{ $message }}</p>
                @enderror

                <input type="hidden" name="previousFileName" value="{{ $solution->answer }}">
                <input type="hidden" name="fileChanged" value="false">
            </div>

            <button
                class="mt-3 flex items-center justify-center appearance-none  text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500"
                type="submit">Guardar</button>
        </form>
    </div>
@endsection
