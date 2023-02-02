@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    @isset($game)
        {{-- {{ $game }} --}}
    @endisset
    @php
        $datetime = new DateTime('2023-02-02 13:30:03');
        // session('end_date') = '';
    @endphp
    {{ print_r($datetime) }}
    @if (session()->has('user'))
        @vite(['resources/js/components/main-logged/main.js'])
    @else
        @vite(['resources/js/components/main/main.js'])
    @endif
@endsection

@section('content')
    <div id="vue"></div>
@endsection
