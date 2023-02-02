@extends('layouts.master')
{{-- @section('title', 'index') --}}

@section('vitejs')
    @vite(['resources/js/image-preview.js'])
@endsection

@section('content')
    <div id="borde-monitor" class="grid grid-cols-1 md:grid-cols-2 items-center py-24 px-10 md:p-14">
        <div class="absolute top-28 right-40">
            <button class="bg-amber-500 text-white font-bold py-2 px-4 rounded">
                <a href={{ route ('user.show')}} >Volver</a>
            </button>
        </div>
        <div class="flex justify-center md:border-r-4">
            <a class="w-3/5" :href="route('index')"><img src="{{ asset('src/img/menu/parasolCorporation.png') }}" /></a>
        </div>
        <div class="flex justify-center">
            <form class="w-full" id="form-registro" action="{{ route('user.update') }}" method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')
                <div class="grid md:grid-cols-2 px-0 md:px-12 overflow-y-auto h-80 md:overflow-visible">
                    <div class="w-full px-3 mb-6">
                        <input
                            class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-first-name" type="text" placeholder="Nombre" name="name" maxlength="200"
                            value="{{ old('Nombre', $user->name) }}" maxlength="50" />
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-surname" type="text" placeholder="Apellido" name="surname" maxlength="200"
                            value="{{ old('Nombre', $user->surname) }}" maxlength="50" />
                        @error('surname')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class=" bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-username" type="text" placeholder="Username" name="nickname" maxlength="50"
                            value="{{ old('Nombre', $user->nickname) }}" maxlength="50" />
                        @error('nickname')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class=" bg-neutral-200 appearance-none block w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-email" type="email" placeholder="Email" name="email" maxlength="200"
                            value="{{ old('Nombre', $user->email) }}" maxlength="50" />
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class=" bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-first-pass" type="password" placeholder="******" name="password" maxlength="200" />
                        @error('password')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class=" bg-neutral-200 appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-second-pass" type="password" placeholder="******" maxlength="200" />
                    </div>

                    <div class="w-full px-3 mb-6 col-span-2 grid grid-cols-2">
                        <input
                            class=" bg-neutral-200 appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 rounded focus:outline-none self-start"
                            name="picture" id="picture" type="file" accept=".jpg,.jpeg,.png"
                            value="{{ old('Nombre', $user->picture) }}" maxlength="50" />

                        <input type="hidden" name="previouseFileName" value="{{ $user->picture }}">
                        <input type="hidden" name="fileChanged" value="false">

                        <div id="preview-container" class="justify-self-stretch flex justify-center px-0 md:px-12">
                            @if (old('picture') === null)
                                <img src="{{ asset('src/img/users/' . $user->picture) }}" class="h-32" id="image-preview">
                            @endif
                        </div>
                        @error('picture')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6">
                        <button
                            class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none bg-amber-500"
                            id="btn-color" type="submit" required>
                            Editar Perfil
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
@endsection
