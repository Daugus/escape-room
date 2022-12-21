<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Escape Room</title>
    {{-- <title>@yield('title')</title> --}}

    @vite(['resources/js/main.js', 'resources/css/app.scss'])
</head>

<body>
    @yield('content')
</body>

</html>
