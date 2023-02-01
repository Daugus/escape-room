@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/agrupando/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
