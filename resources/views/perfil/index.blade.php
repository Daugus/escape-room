@extends('layouts.master')

@section('vitejs')
    {{-- ! agregar check rol --}}
    @if (true)
        @vite(['resources/js/components/perfil/profesor/main.js'])
    @else
        @vite(['resources/js/components/perfil/alumno/main.js'])
    @endif
@endsection

@section('content')
    <div id="vue"></div>
@endsection
