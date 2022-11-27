<section class="about-us">
  <div class="grid">
    <div class="arrow">
      <embed src="{{ asset('img/circle.svg') }}" alt="">
    </div>
    <aside>
      <div class="title">
        Quienes Somos
      </div>
      <div class="body">
        <span>GUAYABO CERO </span>
        es una propuesta en el mercado dedicado aliviar, los síntomas post intoxicación alcohólica excesiva y reponer el
        estado
        físico mejorando el tiempo que perderías por recuperarte.

        El consumo de alcohol es una costumbre social, que en ocasiones se pueden transformar en un problema de salud…
        <br>
        <span>“Guayabo Cero </span> es un grupo orientador que alivia el guayabo y nos esforzamos para brindarte un excelente
        servicio de la mejor
        calidad y facilidad hasta tu <span>hogar”</span>.

      </div>
    </aside>
  </div>
  <div class="gallery">
    <div class="image-1"></div>
    <div class="image-2"></div>
  </div>
</section>

@push('styles')
  <style>
    section.about-us {
      padding-top: 2rem;
      /* padding-bottom: 2rem; */
    }

    section.about-us .header {
      margin: auto;
      max-width: 25.7rem;
      font-weight: 500;
      text-align: justify;
      padding-bottom: 2rem;
      color: var(--color-dark);
    }

    section.about-us .header span {
      color: var(--color-magenta);
    }

    section.about-us .grid {
      padding-top: 3rem;
      padding-bottom: 4rem;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
    }

    section.about-us .grid .arrow embed {
      width: 19rem;
      padding-top: 2rem;
      margin-left: -6rem;
    }


    section.about-us .grid aside {
      padding-right: 7rem;
      max-width: 60rem;
      margin-left: auto;
    }

    section.about-us .grid aside .title {
      font-weight: 800;
      font-size: 3rem;
      text-transform: uppercase;
      text-align: end;
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    section.about-us .grid aside .body {
      text-align: justify;
      font-size: 1.3rem;
    }

    section.about-us .grid aside .body span {
      color: var(--color-magenta);
      font-weight: 500;
      font-size: 19px;
      font-size: 1.4rem;
    }

    section.about-us .gallery {
      display: flex;
      padding-top: 2rem;
    }
    section.about-us .gallery .image-1 {
      width: 30%;
      height: 12rem;
      background-image: url("{{ asset('img/quienes-somos-1.svg') }}");
      background-size: cover;
    }

    section.about-us .gallery .image-2 {
      width: 70%;
      height: 12rem;
      background-image: url("{{ asset('img/quienes-somos-2.svg') }}");
      background-size: cover;
    }
  </style>
@endpush
