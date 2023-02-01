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

            <button class="appearance-none mx-auto flex text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" type="submit">Filtrar</button>
        </form>

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                        Tiempo
                    </th>
                    <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                        Dificultad
                    </th>
                    <th class="border border-gray-700 bg-neutral-200 appearance-none text-gray-700 rounded py-3 px-4">
                        Grupo
                    </th>
                </tr>
            </thead>

            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td class="border border-gray-700 px-3 py-1">{{ $game->time }}</td>
                        <td class="border border-gray-700 px-3 py-1">{{ $game->diff_name }}</td>
                        <td class="border border-gray-700 px-3 py-1">{{ $game->group_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $games->links('components.pagination') }}
    </div>
@endsection