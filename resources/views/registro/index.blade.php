@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/registro/main.js'])
@endsection

@section('content')
    <div class="hidden">
        {{ old('name') }}
    </div>
    <div id="vue"></div>
@endsection
