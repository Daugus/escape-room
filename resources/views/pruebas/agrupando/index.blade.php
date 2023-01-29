@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <a href="{{ route('agrupando.create') }}">Agregar solución</a>

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="border border-gray-700">Campo</th>
                    <th class="border border-gray-700">Concepto</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($solutions as $solution)
                    <tr>
                        <td class="border border-gray-700 px-3 py-1">{{ ucfirst($solution->field) }}</td>
                        <td class="border border-gray-700 px-3 py-1">{{ $solution->concept }}</td>
                        <td class="border border-gray-700 px-3 py-1">
                            <a href="{{ route('agrupando.edit', $solution->id) }}">Editar</a>
                        </td>
                        <td class="border border-gray-700 px-3 py-1">
                            <form action="{{ route('agrupando.destroy', $solution->id) }}" method="POST">
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
