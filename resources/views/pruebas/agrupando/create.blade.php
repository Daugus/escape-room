@extends('layouts.master')

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('agrupando.store') }}" method="POST">
            @csrf

            <div>
                <label for="field">Campo:</label>
                <select name="field" id="field">
                    <option value="-" selected disabled>-</option>
                    <option value="análisis" @selected(old('field') === 'análisis')>Análisis</option>
                    <option value="biotecnología" @selected(old('field') === 'biotecnología')>Biotecnología</option>
                    <option value="medida" @selected(old('field') === 'medida')>Medida</option>
                    <option value="microbiología" @selected(old('field') === 'microbiología')>Microbiología</option>
                </select>

                @error('field')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="concept">Concepto:</label>
                <input type="text" name="concept" id="concept" placeholder="Concepto" value="{{ old('concept') }}"
                    maxlength="50">

                @error('concept')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
