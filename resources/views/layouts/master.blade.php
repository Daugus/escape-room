<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Escape Room</title>

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @routes
    @yield('vitejs')
    @vite(['resources/css/app.scss'])
</head>

<body>
    <ul class="absolute right-0 flex gap-2">
        <li>
            <a href="{{ route('index') }}" class="underline text-blue-600 ">Inicio</a>
        </li>
        <li>
            <a href="{{ route('login.index') }}" class="underline text-blue-600 ">Login</a>
        </li>
        <li>
            <a href="{{ route('registro.index') }}" class="underline text-blue-600 ">Registro</a>
        </li>
        <li>
            <a href="{{ route('perfil.index') }}" class="underline text-blue-600 ">Perfil</a>
        </li>
        <li>
            <a href="{{ route('hangman.index') }}" class="underline text-blue-600 ">Hangman</a>
        </li>
        <li>
            <a href="{{ route('kuku.index') }}" class="underline text-blue-600 ">Kukú</a>
        </li>
        <li>
            <a href="{{ route('agrupando.index') }}" class="underline text-blue-600 ">Agrupando</a>
        </li>
        <li>
            <a href="{{ route('equilibrado.index') }}" class="underline text-blue-600 ">Equilibrado</a>
        </li>
    </ul>

    @yield('content')
</body>

</html>
