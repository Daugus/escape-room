@extends('layouts.master')

@section('vitejs')
    @vite(['resources/js/image-preview.js'])
@endsection

@section('content')
    <div id="borde-monitor" class="flex flex-col justify-center items-center gap-5">
        <form action="{{ route('kuku.update', $solution->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label for="name">Nombre:</label>
                <input type="text" name="name" id="name" placeholder="Nombre"
                    value="{{ old('name', $solution->question) }}" maxlength="50">

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="formula">Fórmula:</label>
                <input type="file" name="formula" id="formula" placeholder="Fórmula" accept=".jpg,.jpeg,.png">

                <div id="preview-container">
                    @if (old('formula') === null)
                        <img src="{{ asset('src/img/kuku/formulas/' . $solution->answer) }}" class="h-32"
                            id="image-preview">
                    @endif
                </div>

                @error('formula')
                    <p>{{ $message }}</p>
                @enderror

                <input type="hidden" name="previousFileName" value="{{ $solution->answer }}">
            </div>

            <button type="submit">Guardar</button>
        </form>
    </div>
@endsection
