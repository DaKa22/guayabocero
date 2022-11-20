@php
$TELEFONO = "3057594692";
$MENSAJE = "%20Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n.";
$navigation = [
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
    'route' => route('home').'#reseñas',
    'active' => false,
    'vinculo_externo' =>false,

  ],
  [
    'name' => 'Contacto',
    'route' => 'https://api.whatsapp.com/send?phone=%2B57'.$TELEFONO.'&text='.$MENSAJE.'&type=phone_number&app_absent=1',
    'active' => false,
    'vinculo_externo' => true,
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
        @if ($navigation['vinculo_externo'])
            target="_blank"
        @endif
      >
        {{ $navigation['name'] }}
      </a>
    @endforeach
  </div>

  <a href="https://api.whatsapp.com/send?phone={{$TELEFONO}}&text={{$MENSAJE}}&type=phone_number&app_absent=1" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
</header>
