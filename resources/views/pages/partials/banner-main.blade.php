@push('styles')
  <style>
    section.banner-main {
      background-image: url("{{ asset('img/banner-main.jpg') }}");
    }
  </style>
@endpush

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

