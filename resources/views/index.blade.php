@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    {{-- @vite(['resources/js/components/principal/main.js']) --}}
@endsection

@section('content')
    <ul>
        <li>
            <a href="{{ route('hangman.index') }}" class="underline text-blue-600 hover:text-blue-800 ">Hangman</a>
            {{-- <a href="{{ route('kuku.index') }}" class="underline text-blue-600 hover:text-blue-800 ">Kukú</a> --}}
        </li>
    </ul>

    <div id="vue"></div>
    <h1>index</h1>
@endsection
