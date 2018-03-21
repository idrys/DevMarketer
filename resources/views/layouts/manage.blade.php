<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer - MANAGEMENT</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>

  <div>
    @include('_includes.nav.main')
  </div>
  <div class="t-l-5">
    @include('_includes.nav.manage')
  </div>
  <section class="hero is-success is-fullheight"   style="background: whitesmoke;">
    <div class="management-area" id="app">
      @yield('content')
    </div>
  </section>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>