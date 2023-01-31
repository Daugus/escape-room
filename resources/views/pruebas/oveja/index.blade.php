@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <a href="{{ route('oveja.create') }}">Agregar solución</a>

        <table class="table-auto max-w-2xl">
            <thead>
                <tr>
                    <th class="border border-gray-700">Concepto</th>
                    <th class="border border-gray-700">Definición</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($solutions as $solution)
                    <tr>
                        <td class="border border-gray-700 px-3 py-1">{{ $solution->question }}</td>
                        <td class="border border-gray-700 px-3 py-1">{{ $solution->answer }}</td>
                        <td class="border border-gray-700 px-3 py-1">
                            <a href="{{ route('oveja.edit', $solution->id) }}">Editar</a>
                        </td>
                        <td class="border border-gray-700 px-3 py-1">
                            <form action="{{ route('oveja.destroy', $solution->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $solutions->links('components.pagination') }}
    </div>
@endsection
