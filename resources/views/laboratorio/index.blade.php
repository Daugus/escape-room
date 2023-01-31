@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/kuku/main.js'])
@endsection

@section('content')
    <div id="lab">
        {{-- COUNTERS --}}
        <div id="general-counter">
            {{-- Cambiar contador en base a la dificultad --}}
            <span>--:--:--</span>
        </div>
        <div id="hangman-counter">
            {{-- Cambiar el contador en base al de Hangman --}}
            <span>--:--</span>
            <div class="smokes">
                AQUI VAN GASES
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
    </div>
@endsection
