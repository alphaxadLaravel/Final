<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @livewireStyles
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset('vendor/css/core.css')}}"  />
    <link rel="stylesheet" href="{{asset('vendor/css/theme-default.css')}}"  />
    <link rel="stylesheet" href="{{asset('css/demo.css')}}" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
        }
    </style>
</head>
<body class="row m-auto d-flex justify-content-center align-items-center">

    @yield('outside')
    
    @livewireScripts
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>