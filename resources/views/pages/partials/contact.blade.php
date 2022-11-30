<section class="contact">
    <div class="form">
        <form class="contact-form" id="contact_form" action="{{ route('store')}}" method="POST" onsubmit="return getForm(this)">
            @csrf
            <h1 class="title-1">COMPARTE TU</h1>
            <h1 class="title-2">EXPERIENCIA</h1>
            <div class="container">
                <input class="field" name="name" type="text" placeholder="NOMBRE COMPLETO" required>
                <input class="field" name="phone" type="number"  placeholder="TELÉFONO DE CONTACTO" min="3000000000" max="3999999999" required>
                <input class="field" name="star" type="number" min="1" max="5" placeholder="NUMERO DE ESTRELLAS" required>
                {{-- <div class="container-star">
                    @foreach (collect()->range(1,5) as $item)
                    <div class="star">
                        <img src="{{ asset('img/star.svg') }}" alt="">
                    </div>
                    @endforeach
                </div> --}}
                <textarea
                    class="field"
                    name="review"
                    cols="30"
                    rows="10"
                    minlength="10"
                    placeholder="ESCRIBE TU EXPERIENCIA ..."
                    required
                ></textarea>
                <button type="submit" class="send">ACEPTAR</button>
            </div>
            <div>
                <p class="form-message"></p>
            </div>
        </form>
    </div>
    <div class="bg-contact"></div>
</section>

@push('styles')
  <style>
        /*Mover Recaptcha a la izquierda*/
    .grecaptcha-badge {
    width: 70px !important;
    overflow: hidden !important;
    transition: all 0.3s ease !important;
    left: -2px !important;
    bottom: 20px !important;
    }
    .grecaptcha-badge:hover {
    width: 256px !important;
    }
    .contact {
      display: grid;
      grid-template-columns: 1fr;
    }

    @media(min-width: 600px) {
      .contact {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    .contact .form {
      background-color: var(--color-magenta);
      color: var(--color-white);
      padding-top: 4rem;
    }
    .contact .container {
      max-width: 80%;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 4rem;
    }

    @media(min-width: 600px) {
      .contact .container {
        max-width: 35rem;
        margin-bottom: 8rem;
      }
    }

    .contact .title-1, .contact .title-2 {
      font-size: 2.5rem;
      text-align: center;
      margin: 0;
    }

    @media(min-width: 600px) {
      .contact .title-1, .contact .title-2 {
        font-size: 6rem;
      }
    }

    .contact .title-2 {
      color: #000;
      margin-top: -0.5rem;
    }

    @media(min-width: 600px) {
      .contact .title-2 {
        margin-top: -1.5rem;
      }
    }

    .contact .container-star {
      display: flex;
      justify-content: center;
      column-gap: .5rem;
      margin-top: 1rem;
    }

    .contact .star {
      width:  2.5rem;
      height: 2.5rem;
      padding: .5rem;
      background-color: #000;
      border-radius: 50%;
    }

    .contact .field {
      width: 100%;
      border-radius: 2rem;
      margin-top: 1rem;
      background-color: transparent;
      border: 3px solid var(--color-white);
      padding: 1rem;
      color: var(--color-white);
      outline: none;
    }

    .contact .field::placeholder {
      color: var(--color-white);
      padding-left: 1rem;
    }

    @media(min-width: 600px) {
      .contact .field::placeholder {
        padding-left: 3rem;
      }
    }

    .contact .send {
      width: 100%;
      margin-top: 1rem;
      border-radius: 2rem;
      text-align: center;
      background-color: var(--color-white);
      color: #000;
      padding: 1rem;
      border: none;
      cursor: pointer;
    }

    .contact .bg-contact {
      background-image: url("{{ asset('img/bg-contact.svg') }}");
      background-size: cover;
      display: none;
    }

    @media(min-width: 600px) {
      .contact .bg-contact {
        display: block;
      }
    }

  </style>
@endpush
