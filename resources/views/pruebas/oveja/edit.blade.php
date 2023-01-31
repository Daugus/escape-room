@extends('layouts.master')

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('oveja.update', $solution->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="concept">Concepto:</label>
                <input type="text" name="concept" id="concept" placeholder="Concepto"
                    value="{{ old('concept', $solution->question) }}" maxlength="50">

                @error('concept')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="definition">Definición:</label>
                <textarea name="definition" id="definition" placeholder="Definición" maxlength="250">
                    {{ old('definition', $solution->answer) }}
                </textarea>

                @error('definition')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
