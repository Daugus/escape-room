@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <p>{{ $group->id }}</p>
        {{ $users }}
    </div>
@endsection
