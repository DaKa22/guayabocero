<a 
  href="https://api.whatsapp.com/send?phone={{$telefono}}&text={{$mensaje}}&type=phone_number&app_absent=1" 
  class="icon-whatsapp" 
  target="_blank"
>
  <i class="fa fa-whatsapp"></i>
</a>

@push('styles')
  <style>
    .icon-whatsapp {
      position: fixed;
      width: 95px;
      height: 95px;
      bottom: 40px;
      right: 40px;
      background-color: #25d366;
      color: #FFF;
      border-radius: 50px;
      text-align: center;
      font-size: 60px;
      box-shadow: 2px 2px 3px #999;
      z-index: 100;
    }

    .icon-whatsapp:hover {
      text-decoration: none;
      color: #25d366;
      background-color: #fff;
    }

    .icon-whatsapp i {
      margin-top: 16px;
    }
  </style>
@endpush