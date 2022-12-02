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
    <img src="{{ asset('img/menu.svg') }}" alt="" id="open-menu">
  </div>
  <div class="navigation-mobile-wrapped" id="menu">
    @foreach ($navigations as $key => $navigation)
        <a
            href="{{ $navigation['route'] }}"
            class="{{ $navigation['active'] ? 'active' : '' }} {{ $key == 0 ? 'first' : '' }}"
            target="{{ $navigation['vinculo_externo'] ? '_blank' : '' }}"
            onclick="hideMenuMobile()"
        >
            {{ $navigation['name'] }}
        </a>
    @endforeach

    <div class="close">
        <img src="{{ asset('img/close.svg') }}" alt="" id="close-menu">
    </div>
  </div>
</header>

@push('styles')
  <style>
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

    header.header .navigation-mobile img {
        width: 2rem;
    }

    #menu {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      min-height: 100vh;
      width: 100%;
      z-index: 100;
      /* justify-content: center; */
      align-items: center;
      background-color: #fff;
      flex-direction: column;
      transition: all ease-in-out 3s;
    }

    .navigation-mobile-wrapped a {
        padding: .4rem;
    }

    .navigation-mobile-wrapped a.first {
        margin-top: 12rem;
    }

    .navigation-mobile-wrapped .close {
        margin-top: 12rem;
    }


    .navigation-mobile-wrapped .close img {
        width: 2rem
    }

  </style>
@endpush


@push('scripts')
    <script>
      const menu =  document.querySelector('#menu')
      const openBtn =  document.querySelector('#open-menu')
      const closeBtn =  document.querySelector('#close-menu')

      openBtn.addEventListener('click', () => {
        menu.style.display = 'flex'
      })

      closeBtn.addEventListener('click', (e) => {
        menu.style.display = 'none'
      })

      const hideMenuMobile = () => {
        menu.style.display = 'none'
      }

    </script>
@endpush
