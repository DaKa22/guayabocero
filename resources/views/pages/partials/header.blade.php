@php
$navigation = [
  [
    'name' => 'Home',
    'route' => route('home').'#home',
    'active' => true,
  ],
  [
    'name' => 'Quienes Somos',
    'route' => route('home').'#quienes-somos',
    'active' => false,
  ],
  [
    'name' => 'Paquetes',
    'route' => route('home').'#paquetes',
    'active' => false,
  ],
  [
    'name' => 'Reseñas',
    'route' => route('home').'#reseñas',
    'active' => false,
  ],
  [
    'name' => 'Contacto',
    'route' => route('home').'#contacto',
    'active' => false,
  ],
];
@endphp

<header>
  <div class="logo">
    <img src="{{ asset('img/logo.png') }}" alt="">
  </div>
  <div class="navigation">
    @foreach ($navigation as $navigation)
      <a 
        href="{{ $navigation['route'] }}"
        class="{{ $navigation['active'] ? 'active' : '' }}"
      >
        {{ $navigation['name'] }}
      </a>
    @endforeach
  </div>
</header>