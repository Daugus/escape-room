@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/sobre-nosotros/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
