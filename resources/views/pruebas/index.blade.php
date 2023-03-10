@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex justify-center items-center">
        <div class="static">
            <button class="absolute top-28 right-40 bg-amber-500 text-white font-bold py-2 px-4 rounded">
                <a href={{ route ('user.show')}} >Volver</a>
            </button>
        </div>
        <div>
            <h1 class="font-bold bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-3">Pruebas:</h1>
            <ul>
                <li><a class="m-4 appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ route('hangman.index') }}">Ahorcado</a></li>
                <li><a class="m-4  appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ route('kuku.index') }}">Kukú</a></li>
                <li><a class="m-4  appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ route('agrupando.index') }}">Agrupando</a></li>
                <li><a class="m-4  appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ route('oveja.index') }}">Cada Oveja con su Pareja</a></li>
            </ul>
        </div>
    </div>
@endsection
