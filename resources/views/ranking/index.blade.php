@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <div class="static">
            <button class="absolute top-28 right-40 bg-amber-500 text-white font-bold py-2 px-4 rounded">
                <a href={{ route ('index')}} >Volver</a>
            </button>
        </div>
        <x-filter-ranking :options="$options"></x-filter-ranking>

        <x-ranking :games="$games" :showState="false"></x-ranking>
    </div>
@endsection
