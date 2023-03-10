<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Escape Room</title>

    <link rel="icon" type="image/x-icon" href="{{ asset('src/img/parasol.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @routes
    @yield('vitejs')
    @vite(['resources/css/app.scss'])
</head>

<body>
    {{-- <ul class="absolute right-0 flex gap-2">
        <li>
            <a href="{{ route('index') }}" class="underline text-blue-600 hover:text-blue-800 ">Inicio</a>
        </li>
        <li>
            <a href="{{ route('user.login') }}" class="underline text-blue-600 hover:text-blue-800 ">Login</a>
        </li>
        <li>
            <a href="{{ route('user.create') }}" class="underline text-blue-600 hover:text-blue-800 ">Registro</a>
        </li>
        <li>
            <a href="{{ route('user.show') }}" class="underline text-blue-600 hover:text-blue-800 ">Perfil</a>
        </li>
        <li>
            <a href="{{ route('pruebas.index') }}" class="underline text-blue-600 hover:text-blue-800 ">Admin
                pruebas</a>
        </li>
        <li>
            <a href="{{ route('ranking.index') }}" class="underline text-blue-600 hover:text-blue-800 ">Ranking</a>
        </li>
        <li>
            <a href="{{ route('user.logout') }}" class="underline text-blue-600 hover:text-blue-800 ">Logout</a>
        </li>
        <li>
            <a href="{{ route('sobre-nosotros.index') }}" class="underline text-blue-600 hover:text-blue-800">Sobre
                nosotros</a>
        </li>
        <li>
            <a href="{{ route('sala-espera.index') }}" class="underline text-blue-600 hover:text-blue-800">sala de
                espera</a>
        </li>
        <li>
            <a href="{{ route('prueba.password') }}" class="underline text-blue-600 hover:text-blue-800 ">Password</a>
        </li>
        <li>
            <a href="{{ route('prueba.hangman') }}" class="underline text-blue-600 hover:text-blue-800 ">Hangman</a>
        </li>

        <li>
            <a href="{{ route('prueba.kuku') }}" class="underline text-blue-600 hover:text-blue-800 ">Kuk??</a>
        </li>
        <li>
            <a href="{{ route('prueba.agrupando') }}"
                class="underline text-blue-600 hover:text-blue-800 ">Agrupando</a>
        </li>
        <li>
            <a href="{{ route('prueba.oveja') }}" class="underline text-blue-600 hover:text-blue-800 ">Oveja</a>
        </li>
    </ul> --}}

    @yield('content')
</body>

</html>
