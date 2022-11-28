<section class="resenas" id="resenas">
  <h1 class="header-title">Reseñas</h1>
  <span class="header-subtitle">
    Nos esforzamos por brindarte un servicio de alta calidad en la comodidad de tu casa
  </span>

  <section class="best-comments">
    <div class="arrow-left">
      <img src="{{ asset('img/arrow-down.svg') }}" alt="">
    </div>
    <div class="comment">
      <h1 class="comment-title">DANIEL ROMERO</h1>
      <div class="container-star">
        @foreach (collect()->range(1,5) as $item)
          <div class="star">
            <img src="{{ asset('img/star.svg') }}" alt="">
          </div>
        @endforeach
      </div>
      <div class="comment-body">
          consectetur adip isicing elit, sed do ei usmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation
          <br>
          Sin duda, el mejor remedio para quitar la resaca rápido efectivo y seguro...
          <b>LA RECOMIENDO</b>
      </div>
    </div>
    <div class="arrow-right">
      <img src="{{ asset('img/arrow-down.svg') }}" alt="">
    </div>
  </section>
</section>

@push('styles')
  <style>
    .resenas {
      padding-top: 6rem;
      padding-bottom: 6rem;
    }

    .resenas .header-title {
      font-size: 4rem;
      text-align: center;
      margin: 0;
      text-transform: uppercase;
    }
    .resenas .header-subtitle {
      display: flex;
      margin-top: -.5rem;
      justify-content: center;
    }

    .resenas .best-comments {
      margin-top: 8rem;
      position: relative;
    }

    .resenas .comment-title {
      font-size: 4rem;
      text-align: center;
      color: var(--color-magenta);
      margin-bottom: 0;
    }

    .resenas .container-star {
      display: flex;
      justify-content: center;
      column-gap: .5rem;
      padding-bottom: 3rem
    }

    .resenas .star {
      width:  2.5rem;
      height: 2.5rem;
      padding: .5rem;
      background-color: #000;
      border-radius: 50%;
    }

    .resenas .comment-body {
      text-align: center;
      max-width: 29rem;
      margin: auto;
    }

    .resenas .arrow-left, .resenas .arrow-right {
      width:  4rem;
      height: 4rem;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
    }

    .resenas .arrow-left {
      left: 4rem;
    }

    .resenas .arrow-right {
      right: 4rem;
    }

    .resenas .arrow-left img {
      transform: rotate(90deg)
    }

    .resenas .arrow-right img {
      transform: rotate(-90deg)
    }
  </style>
@endpush
