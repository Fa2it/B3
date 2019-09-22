<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('components.navbar')
        <main class="container-fluid">
            @yield('content')
        </main>
    </div>
    <footer class="container-fluid">
      <div class="row bg-secondary">
          <div class="container pt-4 pb-4 text-light">
            <div class="row">
                  <div class="col">
                      <h3>About Us</h3>
                      <p> bla bla bla bla </p>
                  </div>
                  <div class="col">
                      <h3>Get Intouch</h3>
                      <p> bla bla bla bla </p>
                  </div>
                  <div class="col">
                      <h3>Site Map</h3>
                      <p> bla bla bla bla </p>
                  </div>
            </div>
          </div>
      </div><!-- Pick Plan Section Ends -->
      <div></div>
    </footer>
</body>
</html>
