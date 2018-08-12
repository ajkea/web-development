<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="https://pro.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-yBZ34R8uZDBb7pIwm+whKmsCiRDZXCW1vPPn/3Gz0xm4E95frfRNrOmAUfGbSGqN" crossorigin="anonymous"></script>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('layouts.header')

            @yield('content')

            @include('layouts.footer')
        </main>
    </div>
</body>
</html>
