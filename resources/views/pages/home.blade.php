@extends('layouts.app')

@section('title', 'Home')

@php
//   $telefono = '3222266461'; //TEST
  $telefono = '3163339407'; //PROD
  $mensaje = '%20Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n.';
  $navigations = [
    [
      'name' => 'Home',
      'route' => route('home').'#home',
      'active' => true,
      'vinculo_externo' => false,
    ],
    [
      'name' => 'Quienes Somos',
      'route' => route('home').'#quienes-somos',
      'active' => false,
      'vinculo_externo' => false,

    ],
    [
      'name' => 'Paquetes',
      'route' => route('home').'#paquetes',
      'active' => false,
      'vinculo_externo' => false,

    ],
    [
      'name' => 'Reseñas',
      'route' => route('home').'#resenas',
      'active' => false,
      'vinculo_externo' =>false,

    ],
    [
      'name' => 'Contacto',
      'route' => "https://api.whatsapp.com/send?phone=%2B57$telefono&text=$mensaje&type=phone_number&app_absent=0",
      'active' => false,
      'vinculo_externo' => true,
    ],
  ];
@endphp

@section('content')
  @include('pages.partials.header')
  @include('pages.partials.banner-main')
  @include('pages.partials.banner-secondary')
  @include('pages.partials.about-us')
  @include('pages.partials.products')
  @include('pages.partials.resenas')
  @include('pages.partials.contact')
  @include('pages.partials.whatsapp')
@endsection
