<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escape Room</title>
    {{-- <title>@yield('title')</title> --}}

    <link rel="preconnect" href="https://rsms.me/%22%3E">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    @vite(['resources/js/main.js', 'resources/css/app.scss'])
</head>

<body>
    @yield('content')
</body>

</html>
