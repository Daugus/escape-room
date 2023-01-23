@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/equilibrado/main.js'])
@endsection

@section('content')
    <h1>equilibrado</h1>

    <div id="vue"></div>
@endsection
