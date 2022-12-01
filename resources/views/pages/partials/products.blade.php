<section class="products" id="paquetes">
    <h1>
        <span>Paquetes para el </span>
        <img src="{{ asset('img/text-guayabo-2.svg') }}" alt="">
    </h1>
    <p class="sub-title">
        Cada persona padece el guayabo de diferente forma. Por eso tenemos varias opcines para los síntomas que puedas
        tener.
    </p>

    @php
        $products = [
            [
                'title' => 'RENACER',
                'description' => 'Este tratamiento básico te ayudará a reponer líquidos y electrolitos de forma rápida y eficiente.',
                'items' => [
                    // '•	Obtendrá todos los beneficios del paquete RENACER.',
                    // '•	Elección de medicamento analgésico',
                    // '•	Medicamento para las náuseas.'
                ],
                'image' => asset('img/paquete.svg'),
            ],
            [
                'title' => 'RE-POTENCIALIZATE',
                'description' => 'Este paquete viene acompañado de varios síntomas: Dolor de cabeza <span> MALESTAR GENERAL</span>.
            ',
                'items' => ['•	Obtendrá todos los beneficios del paquete <span> RENACER</span>.', '•	Elección de medicamento analgésico', '•	Medicamento para las náuseas.'],
                'image' => asset('img/paquete.svg'),
            ],
            [
                'title' => 'GUAYABO FULL',
                'description' => 'Este paquete viene acompañado de varios síntomas: Dolor de cabeza <span>NAUSEAS MALESTAR GENERAL Y DIARREA</span>.',
                'items' => ['•	Elección de medicamento analgésico.', '•	Medicamento para las náuseas.', '•	Protector gástrico', '•	Electrolitos'],
                'image' => asset('img/paquete.svg'),
            ],
            [
                'title' => 'RESURECCION',
                'description' => 'Este es nuestro paquete más completo y eficiente para <span>RECUPERAR EN MENOR TIEMPO POSIBLE</span> a nuestros pacientes.
            viene acompañado de varios síntomas: Dolor de cabeza, Nauseas, malestar general, acidez gástrica, reflujo y fatiga o molidera.
            ',
                'items' => [
                    '• Obtendrá todos los beneficios de los paquetes <span>GUAYABO FULL Y
                    RESURECCION</span> en 45 a 50 minutos estarás listo para la siguiente rumba.
                ',
                    '•	Elección de medicamento analgésico ',
                    '•	Medicamento para las náuseas.',
                    '•	Protector gástrico.',
                    '•	Electrolitos.',
                    '•	Consume levanta muertos.',
                ],
                'image' => asset('img/paquete.svg'),
            ],
        ];
    @endphp
    <div class="header-mobile">
        <h1>
            <span>Paquetes para el </span>
            <img src="{{ asset('img/text-guayabo-2.svg') }}" alt="">
        </h1>
        <p class="sub-title">
            Cada persona padece el guayabo de diferente forma. Por eso tenemos varias opcines para los síntomas que
            puedas tener.
        </p>
    </div>
    <div class="grid">
        @foreach ($products as $product)
            <div>
                <div class="header">
                    {{ $product['title'] }}
                </div>
                <div class="image" style="background-image: url({{ $product['image'] }})"></div>
                <div class="body">
                    {!! $product['description'] !!}
                    @if ($product['items'])
                        <h4 style="color: var(--color-magenta)">INCLUYE:</h4>

                    @endif

                    @foreach ($product['items'] as $item)
                        <br>
                        {!! $item !!}
                        <br>
                    @endforeach
                </div>

                <button
                    onclick="
            window.open(
              'https://api.whatsapp.com/send?phone=%2B57{{ $telefono }}&text={{ $mensaje }}%20Sobre%20el%20paquete%20{{ $product['title'] }}&type=phone_number&app_absent=0',
              '_blank'
            )
          ">Cotizar</button>
            </div>
        @endforeach
    </div>


</section>

@push('styles')
    <style>
        section.products {
            padding-top: 1rem;
            width: 100%;
            height: 260em;
            background-image: url("{{ asset('img/background-products.svg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: center;
            color: var(--color-white);
            padding-bottom: 1rem;
        }

        @media(min-width: 800px) {
            section.products {
                height: 100%;
                padding-top: 5rem;
                padding-bottom: 13rem;
                background-position-y: -2.1rem;
            }
        }

        section.products h1 {
            display: none;
            justify-content: center;
            text-align: center;
            font-size: 4rem;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: .5rem;
            color: #fff;
        }

        @media(min-width: 800px) {
            section.products h1 {
                display: flex;
            }
        }

        section.products .header-mobile {
            display: block;
            padding-top: 5rem;
        }

        @media(min-width: 800px) {
            section.products .header-mobile {
                display: none;
            }
        }

        section.products .header-mobile h1 {
            font-size: 2rem;
            margin: 1.67em 0;
            display: block;
        }

        section.products .header-mobile h1 span {
            margin: 0;
        }

        section.products .header-mobile h1 img {
            margin: 0;
            margin-top: .5rem;
            width: 9rem;
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
            display: none;
            font-size: 1.3rem;
        }

        @media(min-width: 800px) {
            section.products p.sub-title {
                display: block;
            }
        }

        section.products .grid {
            padding-top: 4rem;
            padding-left: 1rem;
            padding-right: 1rem;
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            column-gap: 3rem;
        }

        @media(min-width: 800px) {
            section.products .grid {
                padding-left: 3rem;
                padding-right: 3rem;
                display: grid;
                grid-template-columns: repeat(4, 1fr);
            }
        }

        section.products .grid>div {
            text-align: center;
            margin: 3rem 0;
        }

        section.products .grid .header {
            text-align: center;
            color: var(--color-magenta);
            font-weight: 500;
            font-size: 2rem;
            margin-bottom: .5rem;
            text-transform: uppercase;
        }
        @media(min-width: 800px) {
            section.products .grid .header {
                font-size: 1.6rem;
            }
        }

        section.products .grid .body {
            text-align: justify;
            margin-bottom: 4rem;
        }
        @media(min-width: 800px) {
            section.products .grid .body {
            min-height: 22.8rem;
            text-align: left;


            }
        }
        section.products .grid .image {
            width: 7rem;
            height: 17rem;
            background-size: cover;
            background-repeat: no-repeat;
            margin: auto;
            margin-top: 3rem;
            margin-bottom: 2rem;
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
        section.products .grid span {
            color: var(--color-magenta);
        }
    </style>
@endpush
