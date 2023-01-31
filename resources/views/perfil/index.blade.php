@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="grid grid-cols-3 items-center justify-center py-24 px-96">
        <div>
            <img src="{{ asset('src/img/users/' . session('user')->picture) }}"
                alt="Foto de perfil de {{ session('user')->nickname }}" class="rounded-full">
            <p class="font-bold">{{ session('user')->nickname }}</p>
        </div>

        <div>
            <p><span class="font-bold">Nombre:</span> {{ session('user')->name }} {{ session('user')->surname }}</p>
            <p><span class="font-bold">Correo:</span> {{ session('user')->email }}</p>
        </div>

        <form action="{{ route('user.destroy') }}" method="POST">
            @if (session('user')->role === 'profesor')
                <a href="{{ route('pruebas.index') }}">Administrar pruebas</a>
            @endif

            <a href="{{ route('user.edit') }}">Editar perfil</a>

            @csrf
            @method('DELETE')
            <button type="submit">Eliminar cuenta</button>
        </form>
    </div>
@endsection
