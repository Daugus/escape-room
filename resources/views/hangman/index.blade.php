@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/hangman/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
