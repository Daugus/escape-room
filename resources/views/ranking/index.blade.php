@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <table class="table-auto">
            <thead>
                <tr>
                    <th class="border border-gray-700 bg-neutral-200 appearance-none w-full text-gray-700 rounded py-3 px-4">Tiempo</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td class="border border-gray-700 px-3 py-1">{{ $game->time }}</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $games->links('components.pagination') }}
    </div>
@endsection
