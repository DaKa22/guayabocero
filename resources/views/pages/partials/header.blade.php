<header class="header">
  <div class="logo">
    <img src="{{ asset('img/logo_horizontal.svg') }}" alt="">
  </div>
  <div class="navigation">
    @foreach ($navigations as $navigation)
      <a
        href="{{ $navigation['route'] }}"
        class="{{ $navigation['active'] ? 'active' : '' }}"
        target="{{ $navigation['vinculo_externo'] ? '_blank' : '' }}"
      >
        {{ $navigation['name'] }}
      </a>
    @endforeach
  </div>
  <div class="navigation-mobile">
    {{-- <img src="{{ asset('img/menu.svg') }}" alt=""> --}}
    <input type="checkbox">
    <i class="fas fa-bars"></i>
    <i class="fas fa-times"></i>
    <nav>
        <ul>
            <li>
                @foreach ($navigations as $navigation)
                <a
                    href="{{ $navigation['route'] }}"
                    class="{{ $navigation['active'] ? 'active' : '' }}"
                    target="{{ $navigation['vinculo_externo'] ? '_blank' : '' }}"
                >
                    {{ $navigation['name'] }}
                </a>
                @endforeach
            </li>

        </ul>
    </nav>
  </div>
</header>

@push('styles')
  <style>

        /* menu test finish */
    header.header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      padding-top: 2rem;
      padding-bottom: 1rem;
      padding-left: 3rem;
      padding-right: 3rem;
      width: 100%;
    }

    @media(min-width: 800px) {
      header.header {
        width: auto;
      }
    }

    header.header .navigation {
      display: none;
    }

    @media(min-width: 800px) {
      header.header .navigation {
        display: flex;
        gap: 1rem;
        font-size: 1.3rem;
      }
    }

    header.header .navigation-mobile {
      /* width: 2rem; */
      display: none;
      width: 100% !important;
        position: absolute !important;
        /* display: flex !important; */
        top: 0 !important;
        z-index: 999 !important;
        left: 0 !important;



    }
    header.header .navigation-mobile a {
      /* width: 2rem; */

        color: inherit;
        text-decoration: none;
        display: block;
        padding: 10px 20px;
        border-bottom: 2px solid #456789;
        max-width: 200px;
        background: #234567;
        font-variant: small-caps;
        text-shadow: 1px 1px black;
        font-size: 32px !important;
    padding: 25px !important;
}


    }
    header.header .navigation-mobile input[type="checkbox"], header.header .navigation-mobile .fa-bars, header.header .navigation-mobile .fa-times {
    position: absolute;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    right: 0;
    top: 0;
    width: 48px;
    height: 48px;
    }

    header.header .navigation-mobile .fa-bars, header.header .navigation-mobile .fa-times {
    font-size: 48px;
    pointer-events: none;
    }

    header.header .navigation-mobile input[type="checkbox"] {
    opacity: 0;
    }

    header.header .navigation-mobile {
    color: white;
    position: relative;
    background: #123456;
    min-height: 48px;
    }

    header.header .navigation-mobile nav {
    display: none;
    }

    header.header .navigation-mobile input:checked ~ nav {
    display: block;
    }

    header.header .navigation-mobile input:checked ~ .fa-bars {
    display: none;
    }

    header.header .navigation-mobile input:not(:checked) ~ .fa-times {
    display: none;
    }

    @media(min-width: 800px) {
      header.header .navigation-mobile {
        display: none;
      }
    }

    header.header .logo {
      width: 12rem;
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
