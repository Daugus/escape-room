@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <a class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500" href="{{ route('oveja.create') }}">Agregar solución</a>

        <table class="table-auto max-w-2xl">
            <thead>
                <tr>
                    <th class="bg-neutral-200 appearance-none  text-gray-700  rounded  px-3 py-1 border border-gray-700">Concepto</th>
                    <th class="bg-neutral-200 appearance-none  text-gray-700  rounded  px-3 py-1 border border-gray-700">Definición</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($solutions as $solution)
                    <tr>
                        <td class="bg-neutral-100 appearance-none  text-gray-700  rounded border border-gray-700 px-3 py-1">{{ $solution->question }}</td>
                        <td class="bg-neutral-100 appearance-none  text-gray-700  rounded border border-gray-700 px-3 py-1">{{ $solution->answer }}</td>
                        <td class="bg-neutral-100 appearance-none  text-gray-700  rounded border border-gray-700 px-3 py-1">
                            <a class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-green-500" href="{{ route('oveja.edit', $solution->id) }}">Editar</a>
                        </td>
                        <td class="bg-neutral-100 appearance-none  text-gray-700  rounded  border-gray-700 px-3 py-1 border ">
                            <form action="{{ route('oveja.destroy', $solution->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-red-600" type="submit">Borrar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $solutions->links('components.pagination') }}
    </div>
@endsection
