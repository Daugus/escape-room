@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    @vite(['resources/js/components/sala-espera/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
@endsection
