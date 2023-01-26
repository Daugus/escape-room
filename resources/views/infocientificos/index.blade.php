@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/infocientificos/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
