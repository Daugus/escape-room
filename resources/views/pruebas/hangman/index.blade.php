@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('content')
    <div id="borde-monitor" class="flex justify-center items-center">
        <ul>
            @foreach ($solutions as $solution)
                <li>{{ $solution->microorganism }}</li>
            @endforeach
        </ul>
        {{ $solutions->links('components.pagination') }}
    </div>
@endsection
