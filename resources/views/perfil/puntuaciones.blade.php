@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <x-filter-ranking ruta="user.filterPuntuaciones" :options="$options" :showState="true"></x-filter-ranking>

        <x-ranking :games="$games" :showState="true"></x-ranking>
    </div>
@endsection
