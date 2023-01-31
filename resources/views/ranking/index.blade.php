@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="">

        </form>

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="border border-gray-700">Tiempo</th>
                    <th class="border border-gray-700">Dificultad</th>
                    <th class="border border-gray-700">Grupo</th>
                </tr>
            </thead>

            <tbody>
                {{ $games[0] }}
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
