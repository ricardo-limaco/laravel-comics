@php
$banner_blue = [
  [
    "text"=> "Digital Comics",
    "img"=> "/img/buy-comics-digital-comics.png"
  ],
  [
    "text"=> "DC Merchandise",
    "img"=> "/img/buy-comics-merchandise.png"
  ],
  [
    "text"=> "Subscription",
    "img"=> "/img/buy-comics-subscriptions.png"
  ],
  [
    "text"=> "Comics Shop Locator",
    "img"=> "/img/buy-comics-shop-locator.png"
  ],
  [
    "text"=> "DC Power Visa",
    "img"=> "/img/buy-dc-power-visa.svg"
  ],
]
@endphp


@extends("layouts.default")

@section("page_title", "Comics")

@section("content")
{{-- Comics --}}
<section class="section-card">
  <div class="container position-relative">
    <a href="#" class="_btn-large _btn-blue">CURRENT SERIES</a>

    {{-- Card --}}
    <div class="product-card-container">
      @foreach($dati_comics as $key => $value)
      <a href="{{route('comics.details',['id' => $loop ->index])}}" class="product-card">
        <div class="product-card-img">
          <img src="{{ $value['thumb'] }}" alt="{{ $value['title'] }}">
        </div>
        <h4 class="_title-comics">{{ $value['series'] }}</h4>
      </a>
      @endforeach
    </div>

    <div class="text-center">
      <a href="#" class="_btn-small _btn-blue">LOAD MORE</a>
    </div>
  </div>
</section>


{{-- Banner blue --}}
<section class="banner-blue">
  <div class="container">

    <div class="row">

      @foreach($banner_blue as $value)
      <div class="col-5-footer">
        <img src="{{ $value['img'] }}" alt="{{ $value['text'] }}">

        <a href="#">
          <h5>{{ $value['text'] }}</h5>
        </a>
      </div>
      @endforeach

    </div>

  </div>
</section>

@endsection