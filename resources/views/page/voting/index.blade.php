@extends('layouts.user')

@push('addon-style')
  <link rel="stylesheet" href="{{ url('mycss/main.css') }}">
@endpush


@section('content')
<div class="row" id="voting">
  <div class="col-md-12 text-center mb-4">
      <h2 style="color: #FFF">E-Voting</h2>
  </div>
</div>
<div class="row">
  @foreach ($kandidat as $row)
      {{-- <div class="col-md-3">
          <div class="card mx-auto" style="width: 16rem; margin-bottom: 150px; z-index: 999;">
                <img src="{{ asset('/uploads/' . $row->foto) }}">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $row->nama }}</h5>
                </div>
                <div class="row">
                    <div class="col"><a href="{{ route('simpansuara',$row->id) }}" class="btn btn-primary mb-1" style="width: 100%" onclick="return confirm('Yakin Memilih {{ $row->nama }} ?')">Pilih</a></div>
                </div>
                <div class="row">
                    <div class="col"><a href="" class="btn btn-secondary" style="width:100%"  data-bs-toggle="modal" data-bs-target="#visiMisi{{$row->id}}">Lihat Visi Misi</a></div>
                </div>
          </div>
      </div> --}}
      <div class="col-md-4">
        <div class="container">
          <!--<img src="{{ asset('/uploads/' . $row->foto) }}" width="200" class="rounded-circle" alt="" style="margin-left: 120px">-->
          <div class="pricing-box selected">
            <img src="{{ asset('/public/uploads/' . $row->foto) }}" width="53" class="rounded-circle">
            <h6 class="font-weight-medium title-text">{{ $row->nama }}</h6>
            <p>Periode : {{ $row->periode }}</p>
            <br>
            <a href="{{ route('simpansuara',$row->id) }}" onclick="return confirm('Yakin Memilih {{ $row->nama }} ?')" class="btn btn-outline-primary">Pilih Saya</a>
            <a href="" class="btn btn-outline-primary d-inline" data-toggle="modal" data-target="#visiMisi{{$row->id}}">Lihat Visi Misi</a>
            <a href="" class="btn btn-outline-primary mt-3" data-toggle="modal" data-target="#pengalamanBerorganisasi{{$row->id}}">Lihat Pengalaman Berorganisasi</a>
          </div>
        </div>
      </div>



      {{--  Modal  --}}
      <div class="modal" id="visiMisi{{ $row->id }}" aria-labelledby="visiMisi" tabindex="-1">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalVisiMisi{{ $row->id }}"></h5>
              <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                  <div class="col">Visi</div>
              </div>
              <div class="row">
                  <div class="col" style="word-wrap: break-word">{!! $row->visi !!}</div>
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col">Misi</div>
              </div>
              <div class="row">
                <div class="col ml-3" style="word-wrap: break-word">{!! $row->misi !!}</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      {{--  Modal 2  --}}
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
              <div class="row d-flex">
                  <div class="col ml-5" style="word-wrap: break-word">{!! $row->pengalaman !!}</div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

  @endforeach
</div>
@endsection
@section('content2')
  <div class="row d-flex" style="margin-bottom: 180px;">
    <div class="container">
      <div class="col-md-12">
        <!-- @include('page.user.buku') -->
        @include('carousel.carousel')
      </div>
    </div>
  </div>
@endsection

@section('content3')
  <div class="container" style="margin-bottom: 100px;">
  <div class="mb-5" style="margin-bottom: 250px" data-aos="fade-up">
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
</div>
@endsection

@section('title')
    VOTING-PILKETOS
@endsection
