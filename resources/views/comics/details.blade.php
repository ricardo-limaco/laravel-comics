@extends("layouts.default")

@section("page_title", "Dettagli - ". $comic['series'])

@section("content")

@php
$artists = $comic["artists"];
$writers = $comic["writers"];

$originalDate = $comic['sale_date'];
$newDate = new DateTime($originalDate)
@endphp

{{-- Box Blue --}}
<section class="box-blue">
  <div class="container">

    <div class="img-comic">
      <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series']}}" class="w-100">
      <h5 class="_type">{{ $comic['type'] }}</h5>
      <div class="_view-gallery w-100">
        <h5>VIEW GALLERY</h5>
      </div>
    </div>

  </div>
</section>


{{-- Box Comics --}}
<section class="container">
  <div class="box-comic">
    <div class="row">

      {{-- Price Comics --}}
      <div class="col-8">
        <h2>{{ $comic['title'] }}</h2>

        <div class="_box-price">

          <div class="col-9 d-flex justify-content-between">
            <h4>U.S Price: <span class="text-white">{{ $comic['price'] }}</span></h4>
            <h4 class="ms-auto">AVAILABLE</h4>
          </div>

          <div class="col-3">
            <a href="#">
              <h4>Check Availability <i class="fas fa-caret-down"></i></h4>
            </a>
          </div>
        </div>

        <p>{{ $comic['description'] }}</p>
      </div>


      {{-- Adv --}}
      <div class="col-4">
        <h4 class="text-end">ADVERTISEMENT</h4>
        <img src="{{ asset('img/advertisement.jpg') }}" alt="adv" class="_img-adv">
      </div>
    </div>

  </div>
</section>


{{-- Box Info --}}
<section class="_box-info">
  <div class="container pt-4">
    <div class="row">

      {{-- Talent --}}
      <div class="col-6">
        <h3>Talent</h3>

        <div class="d-flex justify-content-between _info-subtitle">
          <div>
            <h5>Art by:</h4>
          </div>

          <div class="w-50">
            <ul class="lh-1">
              @foreach ($artists as $artist)
              <li class="d-inline-block">
                <h5><a href="">{{$artist}}</a>,</h5>
              </li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="d-flex justify-content-between _info-subtitle">
          <div>
            <h5>Written by:</h4>
          </div>

          <div class="w-50">
            <ul class="lh-1">
              @foreach ($writers as $writer)
              <li class="d-inline-block">
                <h5><a href="">{{$writer}}</a>,</h5>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>

      {{-- Specs --}}
      <div class="col-6">
        <h3>Specs</h3>

        <div class="d-flex justify-content-between _info-subtitle">
          <div class="align-middle">
            <h5>Series:</h4>
          </div>

          <div class="w-75">
            <a href="#">
              <h5 class="text-uppercase">{{ $comic['type'] }}</h5>
            </a>
          </div>
        </div>


        <div class="d-flex justify-content-between _info-subtitle">
          <div class="align-middle">
            <h5>U.S. Price:</h4>
          </div>

          <div class="w-75">
            <h5 class="text-uppercase">{{ $comic['price'] }}</h5>
          </div>
        </div>


        <div class="d-flex justify-content-between _info-subtitle">
          <div class="align-middle">
            <h5>On Sale Date:</h4>
          </div>

          <div class="w-75">
            <h5 class="text-uppercase text-capitalize">{{ $newDate->format('M d Y') }}</h5>
          </div>
        </div>

      </div>

    </div>
  </div>
</section>

{{-- Box Info Icon --}}
<section class="_box-info-icon">
  <div class="container">

    <div class="row">
      <div class="col-3 d-flex justify-content-between">
        <h5>DIGITAL COMICS</h5>
        <img src="{{ asset('img/cta-icons-1.png') }}" alt="cta-icon">
      </div>

      <div class="col-3 d-flex justify-content-between">
        <h5>SHOP DC</h5>
        <img src="{{ asset('img/cta-icons-2.png') }}" alt="cta-icon">
      </div>

      <div class="col-3 d-flex justify-content-between">
        <h5>COMIC SHOP LOCATOR</h5>
        <img src="{{ asset('img/cta-icons-3.png') }}" alt="cta-icon">
      </div>

      <div class="col-3 d-flex justify-content-between">
        <h5>SUBSCRIPTIONS</h5>
        <img src="{{ asset('img/cta-icons-4.png') }}" alt="cta-icon">
      </div>

    </div>
  </div>
</section>



@endsection