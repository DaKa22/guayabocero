<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Laralink">
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" />

  <title>Guayabo | @yield('title')</title>
  @include('partials.styles')
</head>

<body class="cs-dark">
  @include('partials.header')
  @yield('content')
  <div class="cs-height_75 cs-height_lg_45"></div>
  @include('partials.footer')
  @include('partials.scripts')
</body>
</html>
