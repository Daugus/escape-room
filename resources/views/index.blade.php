@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    @vite(['resources/js/components/main/main.js'])
@endsection

@section('content')
    @if (session()->has('user'))
        <p>logged</p>
        @php
            // session()->forget('user');
        @endphp
    @else
        <p>not logged</p>
    @endif
    <div id="vue"></div>
@endsection
