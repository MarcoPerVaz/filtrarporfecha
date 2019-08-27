<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        {{-- Importado para usar bootstrap --}}
            <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        <div id="app">
            @yield('content')
        </div>

        {{-- Importado para usar los componentes --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
