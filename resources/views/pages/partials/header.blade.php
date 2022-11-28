<header class="header">
  <div class="logo">
    <img src="{{ asset('img/logo_horizontal.svg') }}" alt="">
  </div>
  <div class="navigation">
    @foreach ($navigation as $navigation)
      <a
        href="{{ $navigation['route'] }}"
        class="{{ $navigation['active'] ? 'active' : '' }}"
        target="{{ $navigation['vinculo_externo'] ? '_blank' : '' }}"
      >
        {{ $navigation['name'] }}
      </a>
    @endforeach
  </div>
</header>

@push('styles')
  <style>
    header.header .logo {
      width: 12rem;
      /* padding-top: 2rem;
      margin-left: 6rem; */
    }

    header.header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      padding-top: 2rem;
      padding-bottom: 1rem;
      padding-left: 3rem;
      padding-right: 3rem;
    }

    header.header .navigation {
      display: flex;
      gap: 1rem;
      font-size: 1.3rem;
    }

    header.header .navigation a {
      text-transform: uppercase;
      font-weight: bold;
    }

    header.header .navigation a.active {
      color: var(--color-pink);
    }
  </style>
@endpush
