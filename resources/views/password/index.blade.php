@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/password-needed/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
