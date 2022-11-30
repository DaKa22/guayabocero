<section class="resenas" id="resenas">
  <h1 class="header-title">Reseñas</h1>
  <span class="header-subtitle">
    Nos esforzamos por brindarte un servicio de alta calidad en la comodidad de tu casa
  </span>

  <section class="best-comments">
    {{-- <div class="arrow-left">
      <img src="{{ asset('img/arrow-down.svg') }}" alt="">
    </div> --}}
    @foreach ($reviews as $review)
      <div class="comment">
        <h1 class="comment-title">{{ $review->users->name }}</h1>
        <div class="container-star">
          @foreach (collect()->range(1,$review->star) as $item)
            <div class="star">
              <img src="{{ asset('img/star.svg') }}" alt="">
            </div>
          @endforeach
        </div>
        <div class="comment-body">
          {!! $review->review !!}
        </div>
      </div>
    @endforeach
    {{-- <div class="arrow-right">
      <img src="{{ asset('img/arrow-down.svg') }}" alt="">
    </div> --}}
  </section>
</section>

@push('styles')
  <style>
    .resenas {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }

    @media(min-width: 600px) {
      .resenas {
        padding-top: 6rem;
        padding-bottom: 6rem;
      }
    }

    .resenas .header-title {
      font-size: 2.5rem;
      text-align: center;
      margin: 0;
      text-transform: uppercase;
    }

    @media(min-width: 600px) {
      .resenas .header-title {
        font-size: 4rem;
      }
    }
    .resenas .header-subtitle {
      display: flex;
      margin-top: 1rem;
      justify-content: center;
      text-align: center;
    }

    @media(min-width: 600px) {
      .resenas .header-subtitle {
        font-size: 2rem;
        
      }
    }

    .resenas .best-comments {
      margin-top: 3rem;
      position: relative;
    }

    @media(min-width: 600px) {
      .resenas .best-comments {
        margin-top: 8rem;
      }
    }

    .resenas .comment-title {
      font-size: 2rem;
      text-align: center;
      color: var(--color-magenta);
      margin-bottom: 1rem;
    }

    @media(min-width: 600px) {
      .resenas .comment-title {
        font-size: 4rem;
        margin-bottom: 0;
      }
    }

    .resenas .container-star {
      display: flex;
      justify-content: center;
      column-gap: .5rem;
      padding-bottom: 1rem;
    }

    @media(min-width: 600px) {
      .resenas .container-star {
        padding-bottom: 3rem;
      }
    }

    .resenas .star {
      width:  2.5rem;
      height: 2.5rem;
      padding: .5rem;
      background-color: #000;
      border-radius: 50%;
    }

    .resenas .comment-body {
      margin: auto;
      max-width: 90%;
      text-align: justify;
    }

    @media(min-width: 600px) {
      .resenas .comment-body {
        font-size: 1.5rem;
        text-align: center;
        max-width: 29rem;
      }
    }

    .resenas .arrow-left, .resenas .arrow-right {
      width:  4rem;
      height: 4rem;
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      display: none;
    }

    @media(min-width: 600px) {
      .resenas .arrow-left, .resenas .arrow-right {
        display: block;
      }
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

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      $('.best-comments').slick({
        arrows: true
      });
    })
  </script>
@endpush
