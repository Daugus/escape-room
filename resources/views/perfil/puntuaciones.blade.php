@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        {{ session('user')->id }}
        <x-ranking :games="$games"></x-ranking>
    </div>
@endsection
