@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <a href="{{ route('kuku.create') }}">Agregar solución</a>

        <table class="table-auto">
            <thead>
                <tr>
                    <th class="border border-gray-700">Nombre</th>
                    <th class="border border-gray-700">Fórmula</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($solutions as $solution)
                    <tr>
                        <td class="border border-gray-700 px-3 py-1">{{ $solution->question }}</td>
                        <td class="border border-gray-700 px-3 py-1">
                            <img src="{{ asset('src/img/kuku/formulas/' . $solution->answer) }}"
                                alt="fórmula de {{ $solution->question }}" class="max-w-[10rem]">
                        </td>
                        <td class="border border-gray-700 px-3 py-1">
                            <a href="{{ route('kuku.edit', $solution->id) }}">Editar</a>
                        </td>
                        <td class="border border-gray-700 px-3 py-1">
                            <form action="{{ route('kuku.destroy', $solution->id) }}" method="POST">
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
