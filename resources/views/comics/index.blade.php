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
<section>
  <div class="container">
    <div class="product-card-container">
      {{-- Card --}}
      @foreach($dati_comics as $key => $value)
      <a class="product-card" href="#">
        <div class="product-card-img">
          <img src="{{ $value['thumb'] }}" alt="{{ $value['title'] }}">
        </div>
        <h4>{{ $value['series'] }}</h4>
      </a>
      @endforeach
    </div>
    
    <div class="btn-small">
      <a href="#">LOAD MORE</a>
    </div>
  </div>
  </section>
  

{{-- Banner blue --}}
<div class="banner-blue">
  <div class="container">
    
    <div class="row">

      @foreach($banner_blue as $value)
      <div class="col-5-footer">
        <img src="{{ $value['img'] }}" alt="{{ $value['text'] }}">
        
        <a href="#"><h3>{{ $value['text'] }}</h3></a>
      </div>
      @endforeach

    </div>

  </div>
</div>

@endsection