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

</section>

@push('styles')
  <style>
    section.banner-secondary {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    section.banner-secondary .header {
      margin: auto;
      max-width: 25.7rem;
      font-weight: 500;
      text-align: justify;
      padding-bottom: 2rem;
      color: var(--color-dark);
    }

    section.banner-secondary .header span {
      color: var(--color-magenta);
    }

    section.banner-secondary .grid {
      padding-top: 8rem;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }

    section.banner-secondary .grid aside {
      padding-right: 7rem;
      max-width: 34.5rem;
    }

    section.banner-secondary .grid aside .title {
      font-weight: 800;
      font-size: 2rem;
      text-transform: uppercase;
      text-align: end;
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    section.banner-secondary .grid aside .body {
      text-align: justify;
    }

    section.banner-secondary .grid aside .body span {
      color: var(--color-gray);
      font-weight: 500;
      font-size: 19px;
    }



    section.banner-secondary .body {
      position: relative;
    }

    section.banner-secondary .body .image-2 {
      position: absolute;
      top: 0;
      right: 14rem;
      bottom: 0;
      margin: auto;
      width: 25rem;
    }


  </style>
@endpush
