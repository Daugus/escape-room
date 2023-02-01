@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/lab.js'])
@endsection

@section('content')
    <div id="lab">
        {{-- COUNTERS --}}
        <div id="general-counter">
            {{-- Cambiar contador en base a la dificultad --}}
            <span>00:00:00</span>
        </div>
        <div id="hangman-counter">
            {{-- Cambiar el contador en base al de Hangman --}}
            <span>00:00</span>
        </div>
        <div class="gas-container">
            <div class="smoke">
                <img src="{{ asset('src/img/lab/smokes/smoke_1.png') }}" id="smoke1" />
                <img src="{{ asset('src/img/lab/smokes/smoke_2.png') }}" id="smoke2" />
                <img src="{{ asset('src/img/lab/smokes/smoke_3.png') }}" id="smoke3" />
                <img src="{{ asset('src/img/lab/smokes/smoke_4.png') }}" id="smoke4" />
            </div>
        </div>

        {{-- CADA OVEJA CON SU PAREJA --}}
        <a href="{{ route('prueba.oveja') }}" id="oveja"></a>
        {{-- KUKU --}}
        <a href="{{ route('prueba.kuku') }}" id="kuku"></a>
        {{-- HANGMAN --}}
        <a href="{{ route('prueba.hangman') }}" id="hangman"></a>
        {{-- AGRUPANDO --}}
        <a href="{{ route('prueba.agrupando') }}" id="agrupando"></a>
        {{-- NECESITAMOS UNA CONTRASEÑA --}}
        <a href="#" id="password"></a>

        {{-- HINTS --}}
        <div id="pizarra"></div>
    </div>
@endsection
