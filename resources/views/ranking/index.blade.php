@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('ranking.filter') }}" method="POST">
            @csrf

            <label for="difficulty">Dificultad:</label>
            <select name="difficulty" id="difficulty">
                @if (isset($options['difficulty']))
                    <option value="" @selected($options['difficulty'] === '')>Cualquiera</option>
                    <option value="1" @selected($options['difficulty'] === '1')>Fácil</option>
                    <option value="2" @selected($options['difficulty'] === '2')>Normal</option>
                    <option value="3" @selected($options['difficulty'] === '3')>Difícil</option>
                @else
                    <option value="" selected>Cualquiera</option>
                    <option value="1">Fácil</option>
                    <option value="2">Normal</option>
                    <option value="3">Difícil</option>
                @endif
            </select>

            <label for="userCount">Jugadores:</label>
            <select name="userCount" id="userCount">
                @if (isset($options['userCount']))
                    <option value="" @selected($options['userCount'] === '')>Cualquiera</option>
                    <option value="1" @selected($options['userCount'] === '1')>1</option>
                    <option value="2" @selected($options['userCount'] === '2')>2</option>
                    <option value="3" @selected($options['userCount'] === '3')>3</option>
                    <option value="4" @selected($options['userCount'] === '4')>4</option>
                @else
                    <option value="">Cualquiera</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                @endif
            </select>

            <button type="submit">Filtrar</button>
        </form>

        <x-ranking :games="$games"></x-ranking>
    </div>
@endsection
