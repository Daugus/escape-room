@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <x-filter-ranking :options="$options"></x-filter-ranking>

        <x-ranking :games="$games" :showState="false"></x-ranking>
    </div>
@endsection
