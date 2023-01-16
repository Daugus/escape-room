@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    {{-- @vite(['resources/js/components/principal/main.js']) --}}
@endsection

@section('content')
    <ul>
        <li><a href="{{ route('hangman.index') }}"
                class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">Hangman</a></li>
        <li><a href="{{ route('oveja.index') }}"
                class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600">Oveja</a></li>
    </ul>

    <div id="vue"></div>
    <h1>index</h1>
@endsection
