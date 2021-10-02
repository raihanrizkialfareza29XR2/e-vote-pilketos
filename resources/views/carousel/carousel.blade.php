<!DOCTYPE html>
<html>
<head>
    <title>Owl Carousel with Bootstrap 4 (Full Featured)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ url('owl/k.css') }}">
</head>
<body>

<section id="carousel">
  <div class="cards" style="margin-left: var(--marlef)" data-effect="blur">
    <button class="card__save  js-save" type="button">
      <i class="fa  fa-bookmark"></i>
     </button>
    <figure  class="card__image">
      <img src="https://c1.staticflickr.com/4/3935/32253842574_d3d449ab86_c.jpg" alt="Short description">
    </figure>
    <div class="card__header">
      <figure class="card__profile">
        <img src="{{ url('car/ijlal-converted.png') }}" alt="Short description">
      </figure>
    </div>
    <div class="card__body">
      <h3 class="card__name">Ijlal Windhi Saputra</h3>
      <p class="card__job">Kandidat 1</p>
      <p class="card__bio"> Menjadikan OSIS sebagai organisasi yang mendukung dalam memajukan kualitas sekolah dengan menonjolkan ciri khas 'Sekolah IT Terbaik' dengan tetap berlandaskan Attitude is Everything.</p>
      <a class="btn btn-secondary" href="https://drive.google.com/file/d/1GMpiQl_qaXRZ_MWHpIwXw9y60n1GFn5K/view?usp=sharing">Video Profile</a>
    </div>
    <div class="card__footer">
      <p class="card__date">Oct 1 2021</p>
      <p class=""></p>
    </div>
  </div>
  <div class="cards" style="margin-left: var(--marleft); margin-top: var(--martop);" data-effect="blur">
    <button class="card__save  js-save" type="button">
      <i class="fa  fa-bookmark"></i>
     </button>
    <figure  class="card__image">
      <img src="https://c1.staticflickr.com/4/3935/32253842574_d3d449ab86_c.jpg" alt="Short description">
    </figure>
    <div class="card__header">
      <figure class="card__profile">
        <img src="{{ url('car/daiva.png') }}" alt="Short description">
      </figure>
    </div>
    <div class="card__body">
      <h3 class="card__name">Muhammad Daiva Arga Azura</h3>
      <p class="card__job">Kandidat 2</p>
      <p class="card__bio"> Menjadikan siswa-siswi SMK Telkom Malang menjadi siswa yang aktif, inovatif, bertanggung jawab dan tetap berlandaskan attitude is everything.</p>
      <a class="btn btn-secondary" href="https://drive.google.com/file/d/10LJor1bIUF6vjfcbWK7zDW28Hyr5NEv4/view?usp=sharing">Video Profile</a>
    </div>
    <div class="card__footer">
      <p class="card__date">Oct 1 2021</p>
      <p class=""></p>
    </div>
  </div>
  <!-- END: card -->
</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ url('owl/neil.js') }}"></script>

</body>
</html>

