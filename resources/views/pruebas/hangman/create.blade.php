@extends('layouts.master')

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('hangman.store') }}" method="POST">
            @csrf

            <div>
                <label for="microorganism">Nombre microorganismo:</label>
                <input type="text" name="microorganism" id="microorganism" placeholder="Microorganismo"
                    value="{{ old('microorganism') }}" maxlength="50">

                @error('microorganism')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
