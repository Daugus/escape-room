@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    {{-- @vite(['resources/js/components/principal/main.js']) --}}
@endsection

@section('content')
    <ul>
        <li><a href="{{ route('hangman.index') }}">Hangman</a></li>
    </ul>

    <h1>index</h1>
    <div id="app"></div>
@endsection
