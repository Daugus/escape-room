@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/oveja/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
