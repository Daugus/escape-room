@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    @if (session()->has('user'))
        @vite(['resources/js/components/main-logged/main.js'])
    @else
        @vite(['resources/js/components/main/main.js'])
    @endif
@endsection

@section('content')
    <div id="vue"></div>
@endsection
