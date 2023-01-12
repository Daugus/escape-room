@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/hangman/main.js'])
@endsection

@section('content')
    <h1>hangman</h1>
    <div id="app"></div>
@endsection
