@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    @vite(['resources/js/components/sala-espera/main.js'])
@endsection

@section('content')
    <div id="vue"></div>
    <div class="hidden" id='session'>
        {{ json_encode(session('user')) }}
    </div>
@endsection


