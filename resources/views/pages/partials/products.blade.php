<section class="products">
  <h1>
    <span>Paquetes para el </span>
    <img src="{{ asset('img/text-guayabo-2.svg') }}" alt="">
  </h1>
  <p class="sub-title">
    Cada persona padece el guayabo de diferente forma. Por eso tenemos varias opcines para los síntomas que puedas tener.
  </p>

  @php
    $base = [
      'image' => asset('img/paquete.svg'),
      'description' => 'consectetur adip isicing elit, sed doei usmod tempor incidi dunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nos-trud exercitation.',
    ];
    $products = collect()->range(1, 4)
      ->map(fn ($value) => [
        ...$base,
        'title' => "Hidratante $value",
      ]);
  @endphp

  <div class="grid">
    @foreach ($products as $product)
      <div>
        <div class="header">
          {{ $product['title'] }}
        </div>
        <div class="body">
          {{ $product['description'] }}
        </div>
        <div
          class="image"
          style="background-image: url({{ $product['image'] }})"
        ></div>
        <button>Cotizar</button>
      </div>
    @endforeach
  </div>
</section>

@push('styles')
  <style>
    section.products {
      width: 100%;
      padding-top: 5rem;
      background-image: url("{{ asset('img/background-products.svg') }}");
      background-size: cover;
      background-repeat: no-repeat;
      background-position-y: -2.1rem;
      color: var(--color-white);
      padding-bottom: 13rem;
    }

    section.products h1 {
      display: flex;
      justify-content: center;
      text-align: center;
      font-size: 4rem;
      font-weight: 500;
      text-transform: uppercase;
      margin-bottom: .5rem;
    }

    section.products h1 img {
      width: 11rem;
      margin-top: -3rem;
      margin-left: 1rem;
    }

    section.products h1 span {
      margin-top: -2rem;
    }

    section.products p.sub-title {
      margin: 0 auto;
      max-width: 50rem;
      font-size: 1.3rem;
    }

    section.products .grid {
      padding-top: 4rem;
      padding-left:  6rem;
      padding-right: 6rem;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      column-gap: 3rem;
    }

    section.products .grid > div {
      text-align: center;
    }

    section.products .grid .header {
      text-align: center;
      color: var(--color-magenta);
      font-weight: 500;
      font-size: 1.4rem;
      margin-bottom: .5rem;
      text-transform: uppercase;
    }

    section.products .grid .body {
      text-align: justify;
      margin-bottom: 4rem;
    }

    section.products .grid .image {
      width: 7rem;
      height: 17rem;
      background-size: cover;
      background-repeat: no-repeat;
      margin: auto;
    }

    section.products .grid button {
      margin-top: 2rem;
      margin-left: auto;
      margin-right: auto;
      text-transform: uppercase;
      color: var(--color-white);
      background-color: transparent;
      border: 3px solid var(--color-white);
      border-radius: 2rem;
      padding: .8rem 2.5rem;
      font-weight: 800;
      font-size: 18px;
      cursor: pointer;
      transition: all ease-in-out .6s;
    }

    section.products .grid button:hover {
      background-color: var(--color-white);
      color: var(--color-dark);
    }
  </style>
@endpush
