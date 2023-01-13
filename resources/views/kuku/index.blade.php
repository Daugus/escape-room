@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/kuku/main.js'])
@endsection

@section('content')
    <h1>kuku</h1>
    <div id="vue"></div>
@endsection
