<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BB Stats') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .container-slider {
          width: 25em;
          height: 2em;
          margin: 0.5em auto;
          overflow: hidden;
          position: relative;
        }
        .slider {
            top: 1em;
            position: relative;
            box-sizing: border-box;
            animation: slider 30s linear infinite;
            list-style-type: none;
            text-align: center;
            color: black;
        }


        @keyframes slider {
            0%   { top:   10em }
            100% { top: -14em }
        }

        .blur .slider {
          	margin: 0;
            padding: 0 1em;
            line-height: 1.5em;
        }

        .blur:before, .blur::before,
        .blur:after,  .blur::after {
            left: 0;
            z-index: 1;
            content: '';
            position: absolute;
            width: 100%;
            height: 2em;
        }

        .blur:after, .blur::after {
            bottom: 0;
            transform: rotate(180deg);
        }

        .blur:before, .blur::before {
            top: 0;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('components.navbar')
        <main class="container-fluid min-vh-100">
            @yield('content')
        </main>
    </div>
    @include('components.footer')
</body>
</html>
