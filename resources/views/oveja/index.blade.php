@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/oveja/main.js'])
@endsection

@section('content')
    <h1>oveja</h1>
    <div id="vue"></div>
@endsection
