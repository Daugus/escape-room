@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/components/registro/main.js'])
@endsection

@section('content')
    <div class="hidden" id="old">
        @php
            $old = [
                'name' => old('name'),
                'role' => old('role'),
                'surname' => old('surname'),
                'nickname' => old('nickname'),
                'email' => old('email'),
            ];
        @endphp

        {{ json_encode($old) }}
    </div>

    <div id="vue"></div>
@endsection
