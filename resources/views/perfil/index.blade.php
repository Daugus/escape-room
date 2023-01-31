@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class=" gap-3 grid grid-cols-2 items-center justify-center py-24 px-64">
        <div>
            <img src="{{ asset('src/img/users/' . session('user')->picture) }}"
                alt="Foto de perfil de {{ session('user')->nickname }}" class=" border border-neutral-900 ml-24 w-80 rounded-full aspect-square ">
            <p class=" text-3xl mt-8 flex items-center justify-center  font-bold">{{ session('user')->nickname }}</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p class=" m-3  bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"><span class="font-bold">Nombre:</span> {{ session('user')->name }} {{ session('user')->surname }}</p>
                <p class=" m-3 bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"><span class="font-bold">Correo:</span> {{ session('user')->email }}</p>

            </div>

            <form action="{{ route('user.destroy') }}" method="POST">
                @if (session('user')->role === 'profesor')
                    <a href="{{ route('pruebas.index') }}">Administrar pruebas</a>
                @endif

                @csrf
                @method('DELETE')
                <a  class=" m-3 flex items-center justify-center appearance-none  text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ route('user.edit') }}">Editar perfil</a>
                <button class=" m-3 mt-6 flex items-center justify-center appearance-none  text-white font-bold py-2 px-4 rounded focus:outline-none bg-red-600" type="submit">Eliminar cuenta</button>
            </form>
        </div>
    </div>
@endsection
