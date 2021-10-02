<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Reaponsive CSS Cards</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
  <link rel="stylesheet" href="{{ url('owl/style.css') }}" />
</head>

<body>
  
<div class="blog-slider">
  <div class="blog-slider__wrp swiper-wrapper">

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="{{ url('video/Ananda.png') }}" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">17 September 2021</span>
        <div class="blog-slider__title">Ananda Kusuma Wardhani</div>
        <div class="blog-slider__text">Menjadikan OSIS SMK Telkom Malang sebagai wadah berkarya serta aspirasi siswa/i SMK Telkom Malang dengan menjunjung tinggi Attitude is Everything </div>
        <a href="https://drive.google.com/file/d/13g_NThyCtFYKvBg6_D0ek0shMohVIcFH/view?usp=sharing" class="blog-slider__button">Watch Now</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="{{ url('video/Daiva.png') }}" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">17 September 2021</span>
        <div class="blog-slider__title">Muhammad Daiva Arga Azura</div>
        <div class="blog-slider__text">Menjadikan siswa siswi SMK Telkom Malang menjadi siswa yang aktif, inovatif, bertanggung jawab dan tetap berlandaskan attitude is everything</div>
        <a href="https://drive.google.com/file/d/1wE__E-IGvO1WFoGDCco2XYpUyy09WaL6/view?usp=sharing" class="blog-slider__button">Watch Now</a>
      </div>
    </div>
    
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="{{ url('video/Dea.png') }}" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">17 September 2021</span>
        <div class="blog-slider__title">Dea Putri Nitami</div>
        <div class="blog-slider__text">Menjadikan OSIS SMK Telkom Malang yang progresif dan  kompak sebagai wadah membentuk potensi siswa, serta  dapat berdampak baik di dalam maupun di luar sekolah.</div>
        <a href="https://drive.google.com/file/d/1l39Z6bq21SHv4yaYrhmE0czgN9JO7yU-/view?usp=sharing" class="blog-slider__button">Watch Now</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="{{ url('video/Ijlal.png') }}" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">17 September 2021</span>
        <div class="blog-slider__title">Ijlal Windhi Saputra</div>
        <div class="blog-slider__text">Menjadikan OSIS sebagai organisasi yang mendukung dalam memajukan kualitas sekolah dengan menonjolkan ciri khas 'Sekolah IT Terbaik' dengan tetap berlandaskan Attitude is Everything.</div>
        <a href="https://drive.google.com/file/d/17GQSK0KLKY2-Q9Zz8-5AyJw0Pzm3AQ46/view?usp=sharing" class="blog-slider__button">Watch Now</a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="{{ url('video/Rizwanda.png') }}" alt="">
      </div>
      <div class="blog-slider__content">
        <span class="blog-slider__code">17 September 2021</span>
        <div class="blog-slider__title">Rizwanda Keysha Cahya Putra</div>
        <div class="blog-slider__text">Mewujudkan OSIS SMK Telkom Malang yang berakhlak
          mulia, mengamalkan sila-sila Pancasila, serta menjadi
          wadah untuk para pemuda bertukar pikiran dan melatih
          tingkah laku berlandaskan "Attitude is Everything".</div>
        <a href="https://drive.google.com/file/d/1YixD1nXh3x_YdAt-Wa4P1gNnkXILQOqJ/view?usp=sharing" class="blog-slider__button">Watch Now</a>
      </div>
    </div>

    
    
  </div>
  <div class="blog-slider__pagination"></div>
</div>

@foreach($kandidat as $row)
    {{--  Modal  --}}
      <div class="modal" id="pengalamanBerorganisasi{{ $row->id }}" aria-labelledby="pengalamanBerorganisasi" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalPengalamanBerorganisasi{{ $row->id }}"></h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col">Pengalaman Berorganisasi</div>
              </div>
              <div class="row">
                  <div class="col" style="word-wrap: break-word">{!! $row->pengalaman !!}</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    @endforeach

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script type="text/javascript" src="{{ url('owl/script.js') }}"></script>
</body>
</html>