<section class="banner-main">
  <div class="content-bottom-left">
    <div class="bg-dark">
      Somos la mejor
    </div>
    <div class="bg-magenta">
      Cura para el guayabo
    </div>
    <div class="arrow">
      <img src="{{ asset('img/arrow-down.svg') }}" alt="">
    </div>
  </div>
</section>

@push('styles')
  <style>
    section.banner-main {
      background-image: url("{{ asset('img/banner-main.jpg') }}");
      background-size: cover;
      min-height: 500px;
      position: relative;
    }

    section.banner-main .content-bottom-left {
      position: absolute;
      bottom: 0;
      left: 0;
      color: var(--color-white);
      padding-left: 2rem;
      padding-right: 2rem;
      padding-bottom: 2rem;
      transform: rotate(-3deg);
      font-size: 2rem;
      text-transform: uppercase;
      font-weight: 500;
    }

    section.banner-main .content-bottom-left .bg-dark {
      position: relative;
      padding-left: 4rem;
      color: var(--color-white);
    }

    section.banner-main .content-bottom-left .bg-dark::after {
      content: 'a';
      color: transparent;
      position: absolute;
      top: 0;
      left: 0;
      background-color: var(--color-dark);
      width: 21rem;
      z-index: -1;
    }

    section.banner-main .content-bottom-left .bg-magenta {
      background-color: var(--color-magenta);
      color: var(--color-white);
      padding-left: 1rem;
      padding-right: 1rem;
    }

    section.banner-main .content-bottom-left .arrow {
      position: relative;
    }

    section.banner-main .content-bottom-left .arrow img {
      position: absolute;
      width: 2rem;
      top: -5px;
      left: 3rem;
    }
  </style>
@endpush