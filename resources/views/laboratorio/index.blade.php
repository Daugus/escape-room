@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/kuku/main.js'])
@endsection

@section('content')
    <div id="lab">
        {{-- COUNTERS --}}
        <div id="general-counter">
            {{-- Cambiar contador en base a la dificultad --}}
            <span>1:00:00</span>
        </div>
        <div id="hangman-counter">
            {{-- Cambiar el contador en base al de Hangman --}}
            <span>02:00</span>
        </div>

        {{-- CADA OVEJA CON SU PAREJA --}}
        <a href="{{ route('prueba.oveja') }}" id="oveja"></a>
        {{-- KUKU --}}
        <a href="{{ route('prueba.kuku') }}" id="kuku"></a>
        {{-- HANGMAN --}}
        <a href="{{ route('prueba.hangman') }}" id="hangman"></a>
        {{-- TODO BIEN EQUILIBRADO --}}
        <a href="{{ route('prueba.equilibrado') }}" id="equilibrado"></a>
        {{-- AGRUPANDO --}}
        <a href="{{ route('prueba.agrupando') }}" id="agrupando"></a>
        {{-- NECESITAMOS UNA CONTRASEÑA --}}
        <a href="#" id="password"></a>

        {{-- HINTS --}}
    </div>
@endsection
