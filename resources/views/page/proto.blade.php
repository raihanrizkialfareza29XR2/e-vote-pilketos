@extends('layouts.user')

@section('content')
<section class="countdown">
  <div class="container">
    <div class="col-md-12">
      <h3 class="font-weight-medium text-dark mb-5">Pemilihan Akan Ditutup Pada</h3>
    </div>
    <div class="row d-flex mt-5 ml-3">
      <div class="col-md-3">
        <div class="day" id="day"></div>
      </div>
      <div class="col-md-3">
        <div class="hour" id="hour"></div>
      </div>
      <div class="col-md-3">
        <div class="minute" id="minute"></div>
      </div>
      <div class="col-md-3">
        <div class="second" id="second"></div>
      </div>
    </div>
  </div>
</section>
<section class="our-services" id="services">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h5 class="text-dark">Alert</h5>
        <h3 class="font-weight-medium text-dark mb-5">Sebelum Memilih</h3>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
      <div class="col-sm-4 text-center text-lg-left">
        <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <img src="{{ url('front/images/integrated-marketing.svg') }}" alt="integrated-marketing" data-aos="zoom-in">
          <h6 class="text-dark mb-3 mt-4 font-weight-medium">Username dan Password
          </h6>
          <p>Pastikan username dan password anda sudah benar 
          </p>
        </div>
      </div>
      <div class="col-sm-4 text-center text-lg-left">
        <div class="services-box"   data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <img src="{{ url('front/images/design-development.svg') }}" alt="design-development" data-aos="zoom-in">
          <h6 class="text-dark mb-3 mt-4 font-weight-medium">Koneksi
          </h6>
          <p>Pastikan koneksi internet anda lancar 
          </p>
        </div>
      </div>
      <div class="col-sm-4 text-center text-lg-left">
        <div class="services-box" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <img src="{{ url('front/images/digital-strategy.svg') }}" alt="digital-strategy" data-aos="zoom-in">
          <h6 class="text-dark mb-3 mt-4 font-weight-medium">Error
          </h6>
          <p>Apabila terjadi error segera hubungi admin
          </p>
        </div>
      </div>
    </div>
    <div class="row" data-aos="fade-up">
      <div class="col-sm-4 text-center text-lg-left">
        <div class="services-box  pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <img src="{{ url('front/images/digital-marketing.svg') }}" alt="digital-marketing" data-aos="zoom-in">
          <h6 class="text-dark mb-3 mt-4 font-weight-medium">Mekanisme
          </h6>
          <p>Tidak boleh memilih lebih dari satu kandidat 
          </p>
        </div>
      </div>
      <div class="col-sm-4 text-center text-lg-left">
        <div class="services-box pb-lg-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <img src="{{ url('front/images/growth-strategy.svg') }}" alt="growth-strategy" data-aos="zoom-in">
          <h6 class="text-dark mb-3 mt-4 font-weight-medium">Tidak dapat mengulang
          </h6>
          <p>Pastikan kandidat pilihanmu sudah tepat sebelum submit, <br> karena pemilihan tidak dapat diulang 
          </p>
        </div>
      </div>
      <div class="col-sm-4 text-center text-lg-left">
        <div class="services-box pb-0" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
          <img src="{{ url('front/images/saving-strategy.svg') }}" alt="saving-strategy" data-aos="zoom-in">
          <h6 class="text-dark mb-3 mt-4 font-weight-medium">Kenali Kandidat
          </h6>
          <p>Agar tidak salah pilih, kenali dan amati kandidat terlebih dahulu 
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="our-process" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-6" data-aos="fade-up">
        <h5 class="text-dark">Prosedur Pemilihan</h5>
        <h3 class="font-weight-medium text-dark">Langkah Langkah</h3>
        <h5 class="text-dark mb-3">Silakan simak beberapa poin di bawah</h5>
        <p class="font-weight-medium mb-4">Belum paham gimana caranya? <br> 
          Gampang banget, budayakan membaca.. Oke, lanjuts
        </p>
        <div class="d-flex justify-content-start mb-3">
          <img src="{{ url('front/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
          <p class="mb-0">Login terlebih dahulu menggunakan username dan password yang sudah di share oleh admin</p>
        </div>
        <div class="d-flex justify-content-start mb-3">
          <img src="{{ url('front/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
          <p class="mb-0">Setelah berhasil login, user akan langsung diarahkan ke page voting kandidat</p>
        </div>
        <div class="d-flex justify-content-start mb-3">
          <img src="{{ url('front/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
          <p class="mb-0">Pada halaman voting, akan terlihat seluruh kandidat beserta visi dan misinya</p>
        </div>
        <div class="d-flex justify-content-start mb-3">
          <img src="{{ url('front/images/tick.png') }}" alt="tick" class="mr-3 tick-icon"  >
          <p class="mb-0">Klik button "vote" untuk memilih kandidat</p>
        </div>
      </div>
      <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <img src="{{ url('front/images/idea.png') }}" alt="idea" class="img-fluid gambar">
      </div>
    </div>
  </div>
</section>
<section class="video" id="video">
  <div class="container videos">
    <div class="row d-flex ml-2 justify-content-center">
      <!-- <div class="col-md-12">
        <div class="vdi" style="height: 250px" align="center">
          {{-- <a href="https://www.youtube.com/watch?v=tPpw3vJlu7o" data-lity>
            <img src="{{ url('imgfeed/Ijlal.jpg') }}" width="200">
          </a> --}}
          <iframe style="border-radius: 20px;" width="760" height="315" src="https://www.youtube.com/embed/tPpw3vJlu7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div> -->
      <div class="col-md-4 mb-3">
        <iframe style="border-radius: 20px;" src="https://www.youtube.com/embed/tPpw3vJlu7o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-4 mb-3">
        <iframe style="border-radius: 20px;" src="https://www.youtube.com/embed/kBAlyrTOBrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="col-md-4 mb-3">
        <iframe style="border-radius: 20px;" src="https://www.youtube.com/embed/sHYfpNUc5sc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section class="our-projects" id="projects">
  <div class="container">
    <div class="row mb-5">
      <div class="col-sm-12">
        <div class="d-sm-flex justify-content-between align-items-center mb-2">
          <h3 class="font-weight-medium text-dark "> Our Flyer, Feed & Poster</h3>
          <div><a href="#" class="btn btn-outline-primary">View more</a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="mb-5" data-aos="fade-up">
    <div class="owl-carousel-projects owl-carousel owl-theme">
      <div class="item">
        <a href="{{ url('imgfeed/Ijlal.jpg') }}" data-lightbox="carousel">
          <img src="{{ url('imgfeed/Ijlal.jpg') }}" alt="slider">
        </a>
      </div>
      <div class="item">
        <a href="{{ url('imgfeed/Ananda.jpg') }}" data-lightbox="carousel">
          <img src="{{ url('imgfeed/Ananda.jpg') }}" alt="slider">
        </a>
      </div>
      <div class="item">
        <a href="{{ url('imgfeed/Rizwanda.jpg') }}" data-lightbox="carousel">
          <img src="{{ url('imgfeed/Rizwanda.jpg') }}" alt="slider">
        </a>
      </div>
      <div class="item">
        <a href="{{ url('imgfeed/Dea.jpg') }}" data-lightbox="carousel">
          <img src="{{ url('imgfeed/Dea.jpg') }}" alt="slider">
        </a>
      </div>
      <div class="item">
        <a href="{{ url('imgfeed/Daiva.jpg') }}" data-lightbox="carousel">
          <img src="{{ url('imgfeed/Daiva.jpg') }}" alt="slider">
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row pt-5 mt-5 pb-5 mb-5">
      <div class="col-sm-3">
        <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
          <img src="{{ url('front/images/satisfied-client.svg') }}" alt="satisfied-client" class="mr-3">
          <div>
            <h4 class="font-weight-bold text-dark mb-0"><span class="scVal">0</span>%</h4>
            <h5 class="text-dark mb-0">Original Contents</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
          <img src="{{ url('front/images/finished-project.svg') }}" alt="satisfied-client" class="mr-3">
          <div>
            <h4 class="font-weight-bold text-dark mb-0"><span class="fpVal">0</span>+</h4>
            <h5 class="text-dark mb-0">Achievements</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
          <img src="{{ url('front/images/team-members.svg') }}" alt="Team Members" class="mr-3">
          <div>
            <h4 class="font-weight-bold text-dark mb-0"><span class="tMVal">0</span>+</h4>
            <h5 class="text-dark mb-0">School Members</h5>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
          <img src="{{ url('front/images/our-blog-posts.svg') }}" alt="Our Blog Posts" class="mr-3">
          <div>
            <h4 class="font-weight-bold text-dark mb-0"><span class="bPVal">0</span>+</h4>
            <h5 class="text-dark mb-0">Inspirations</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="testimonial" id="testimonial">
  <div class="container">
    <div class="row  mt-md-0 mt-lg-4">
      <div class="col-sm-6 text-white" data-aos="fade-up">
        <p class="font-weight-bold mb-3">Motivational Quotes</p>
        <h3 class="font-weight-medium">Your choices determine <br>our future</h3>
        <ul class="flipster-custom-nav">
          <li class="flipster-custom-nav-item">
            <a href="javascript:;" class="flipster-custom-nav-link" title="0"></a>
          </li>
          <li class="flipster-custom-nav-item">
            <a href="javascript:;" class="flipster-custom-nav-link"  title="1"></a>
          </li>
          <li class="flipster-custom-nav-item">
            <a href="javascript:;" class="flipster-custom-nav-link active" title="2"></a>
          </li>
          <li class="flipster-custom-nav-item">
            <a href="javascript:;" class="flipster-custom-nav-link"  title="3"></a>
          </li>
        </ul>
      </div>
      <div class="col-sm-6" data-aos="fade-up">
        <div id="testimonial-flipster">
          <ul>
            <li>
              <div class="testimonial-item">
                <img src="{{ url('front/images/account.png') }}" alt="icon" class="testimonial-icons">
                <p>Demokrasi adalah proses di mana orang-orang memilih seseorang yang kelak akan mereka salahkan.
                </p>
                <h6 class="testimonial-author">Bertrand Russel</h6>
                <p class="testimonial-destination">Filsuf</p>
              </div>
            </li>
            <li>
              <div class="testimonial-item">
                <img src="{{ url('front/images/account.png') }}" alt="icon" class="testimonial-icons">
                <p>Pemilu mengingatkan kita tidak hanya tentang hak tetapi tanggung jawab kewarganegaraan dalam demokrasi.
                </p>
                <h6 class="testimonial-author">Robert F. Kennedy</h6>
                <p class="testimonial-destination">US Senator (1925 - 1968)</p>
              </div>
            </li>
            <li>
              <div class="testimonial-item">
                <img src="{{ url('front/images/account.png') }}" alt="icon" class="testimonial-icons">
                <p>Jika semua sibuk memburu kemenangan, demokrasi tak lebih sekedar barang dagangan.
                </p>
                <h6 class="testimonial-author">Najwa Shihab</h6>
                <p class="testimonial-destination">Journalist</p>
              </div>
            </li>
            <li>
              <div class="testimonial-item">
                <img src="{{ url('front/images/account.png') }}" alt="icon" class="testimonial-icons">
                <p>melahirkan kuasa yang disepakati, dan ada proses bertukar pikiran sebelum kesepakatan. 
                  Ada kesabaran sebelum mulut ditutup dengan ikhlas.
                </p>
                <h6 class="testimonial-author">Goenawan Muhammad</h6>
                <p class="testimonial-destination">Founders of Tempo.com</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="clients pt-5 mt-5"  data-aos="fade-up" data-aos-offset="-400">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="d-sm-flex justify-content-between align-items-center">
          <img src="{{ url('front/images/1200px-Cloudflare-logo-vector.svg.png') }}" alt="cloudflare" width="170" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
          <img src="{{ url('front/images/laravel-featured-removebg-preview.png') }}" alt="laravel" width="170" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
          <img src="{{ url('front/images/MySQL-Logo.wine.png') }}" alt="mysql" width="170" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
          <img src="{{ url('front/images/js-removebg-preview.png') }}" alt="js" width="170" class="p-2 p-lg-0" data-aos="fade-up"  data-aos-offset="-400">
          <img src="{{ url('front/images/CSS.png') }}" alt="css" width="100" class="p-2 p-lg-0" data-aos="fade-down"  data-aos-offset="-400">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pricing-list" id="plans">
  <div class="container">
    <div class="row" data-aos="fade-up" data-aos-offset="-500">
      <div class="col-sm-12">
        <div class="d-sm-flex justify-content-between align-items-center mb-2">
          <div>
            <h3 class="font-weight-medium text-dark ">Our Website & Social Media</h3>
            <h5 class="text-dark ">Berikut merupakan website official dan sosial media kami </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="row"  data-aos="fade-up" data-aos-offset="-300">
      <div class="col-sm-4">
        <div class="pricing-box selected">
          <img src="{{ url('front/images/mpk.png') }}" alt="mpk" width="53">
          <h6 class="font-weight-medium title-text">Website Official MPK MOKLET</h6>
          <ul class="pricing-list">
            <li>Landing page apa itu MPK</li>
            <li>Benefit berorganisasi</li>
            <li>Rincian dan timeline progja</li>
            <li>E-Aspiration</li>
            <li>Portofolio organisasi</li>
          </ul>
          <a href="https://mpkmoklet.rizkigroups.com" class="btn btn-outline-primary">Mampir Yuk</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="pricing-box selected">
          <img src="{{ url('front/images/600px-Instagram_icon.png') }}" alt="starter" width="53">
          <h6 class="font-weight-medium title-text">Instagram MPK MOKLET</h6>
          <ul class="pricing-list">
            <li>Social media resmi MPK Moklet</li>
            <li>Feed dan flyer event / hari besar</li>
            <li>Dokumentasi progja</li>
            <li>Anggota</li>
          </ul>
          <a href="https://www.instagram.com/mpkmoklet/" class="btn btn-outline-primary">Mampir Yuk</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="pricing-box selected">
          <img src="{{ url('front/images/vote.png') }}" alt="starter" width="53">
          <h6 class="font-weight-medium title-text">E - Aspiration MPK MOKLET</h6>
          <ul class="pricing-list">
            <li>Platform aspirasi MPK MOKLET</li>
            <li>Menampung aspirasi seluruh siswa SMK Telkom Malang</li>
            <li>Aspirasi dipilah, dikurasi, dan</li>
            <li>diteruskan kepada pihak sekolah</li>
          </ul>
          <a href="https://mpkmoklet.rizkigroups.com/contact/" class="btn btn-outline-primary">Mampir Yuk</a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contactus" id="contact">
  <div class="container">
    <div class="row mb-5 pb-5">
      <div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
        <img src="{{ url('front/images/contact.jpg') }}" alt="contact" class="img-fluid gambar">
      </div>
      <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
        <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Got A Problem?</h3>
        <h5 class="text-dark mb-5">Pengaduan masalah, kritik, dan saran</h5>
        <form action="{{ route('postmail') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" class="form-control" name="nama" id="name" placeholder="Nama*">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="mail" placeholder="Email*">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label class="font-weight-bold" for="">Subjek*</label>
                <input type="text" class="form-control" name="subject" id="mail" placeholder="3 letters required">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label class="font-weight-bold" for="">Pesan*</label>
                <textarea name="message" id="message" name="pesan" class="form-control" placeholder="10 letters required" rows="5"></textarea>
              </div>
            </div>
            <div class="col-sm-12">
              <button class="btn btn-warning" type="submit">KIRIM</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
</div>
<script>
  var countDate = new Date('Oct 1, 2021 17:00:00').getTime();

  function newYear() {
    var now = new Date().getTime();
    var gap = countDate - now;
    console.log(gap);

    var second = 1000;
    var minute = second * 60;
    var hour = minute * 60;
    var day = hour * 24;

    var d = Math.floor(gap / (day));
    var h = Math.floor((gap % (day)) / (hour));
    var m = Math.floor((gap % (hour)) / (minute));
    var s = Math.floor((gap % (minute)) / second);

    document.getElementById('day').innerText = d;
    document.getElementById('hour').innerText = h;
    document.getElementById('minute').innerText = m;
    document.getElementById('second').innerText = s;
  }

  setInterval(function() {
    newYear();
  }, 1000)
</script>
@endsection

@section('title')
    PILKETOS 2021 - 2022
@endsection
