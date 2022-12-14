<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Daka22">
  <meta name="csrf_token" content="{{ csrf_token() }}" />
  <link rel="icon" href="{{ asset('img/icono.svg') }}" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=ralewaysemibold:ital,wght@0,400;0,500;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <title>Guayabo | @yield('title')</title>
  @include('partials.styles')
  @stack('styles')
</head>

<body>
  @yield('content')
  @include('partials.scripts')
  @stack('scripts')
</body>
</html>
