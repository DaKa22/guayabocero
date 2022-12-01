<section class="banner-secondary">
  <div class="header">
    <span>Nuestro equipo orientador</span>
    te administrará una mezcla de vitaminas, minerales, antioxidantes y medicamentos para
    <div class="text-center">
      <span>eliminar tu guayabo</span>
      y otros síntomas.
    </div>
  </div>
  <div class="body">
    <img src="{{ asset('img/chica-guayabo.svg') }}" class="image-1" >
    <img src="{{ asset('img/text-guayabo.svg') }}" class="image-2">
  </div>

  <div class="body-mobile">
    <img src="{{ asset('img/text-guayabo.svg') }}" class="image-2">
  </div>

</section>

@push('styles')
  <style>
    section.banner-secondary {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    section.banner-secondary .header {
      margin-left: auto;
      margin-bottom: auto;
      margin-right: auto;
      max-width: 80%;
      font-weight: 500;
      text-align: justify;
      padding-bottom: 2rem;
      color: var(--color-dark);
      font-size: 1rem;
      text-align: center;
      margin-top: 1.5rem;
    }

    @media(min-width: 800px) {
      section.banner-secondary .header {
        margin-top: auto;
        max-width: 52rem;
        font-size: 2rem;
      }
    }

    section.banner-secondary .header div {
      display: inline-block;
      text-align: center;
    }

    @media(min-width: 800px) {
      section.banner-secondary .header div {
        display: block;
      }
    }

    section.banner-secondary .header span {
      color: var(--color-magenta);
    }


    section.banner-secondary .body {
      display: none;
      position: relative;
    }

    @media(min-width: 800px) {
      section.banner-secondary .body {
        display: block;
      }
    }

    section.banner-secondary .body .image-2 {
      position: absolute;
      top: 0;
      right: 14rem;
      bottom: 0;
      margin: auto;
      width: 25rem;
    }

    section.banner-secondary .body-mobile {
      padding: 4rem 2rem;
      background-color: #000;
    }

    @media(min-width: 800px) {
      section.banner-secondary .body-mobile {
        display: none;
      }
    }

  </style>
@endpush
