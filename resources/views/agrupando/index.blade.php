@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/agrupando/main.js'])
@endsection

@section('content')
    <h1>agrupando</h1>

    <div id="vue"></div>
@endsection
