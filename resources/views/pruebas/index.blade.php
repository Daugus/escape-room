@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex justify-center items-center">
        <div>
            <h1>Pruebas:</h1>
            <ul>
                <li><a href="{{ route('hangman.index') }}">Ahorcado</a></li>
                <li><a href="{{ route('pruebas.index') }}">Kukú</a></li>
                <li><a href="{{ route('agrupando.index') }}">Agrupando</a></li>
                <li><a href="{{ route('oveja.index') }}">Cada Oveja con su Pareja</a></li>
            </ul>
        </div>
    </div>
@endsection
