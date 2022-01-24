@php
$follow = [
  [
    "img"=> "/img/footer-facebook.png",
    "alt"=> "Facebook"
  ],
  [
    "img"=> "/img/footer-twitter.png",
    "alt"=> "Twitter"
  ],
  [
    "img"=> "/img/footer-youtube.png",
    "alt"=> "Yotube"
  ],
  [
    "img"=> "/img/footer-pinterest.png",
    "alt"=> "Pinterest"
  ],
  [
    "img"=> "/img/footer-periscope.png",
    "alt"=> "Periscope"
  ],
];
$footer_shop = [
  "SHOP DC",
  "SHOP DC Collectibles"
];
$footer_dc = [
  "Terms OF Use",
  "Privacy policy (New)",
  "Ad Choices",
  "Advertising",
  "Jobs",
  "Subscriptions",
  "Talent Workshops",
  "CPSC Certificates",
  "Ratings",
  "Shop Help",
  "Contact Us",
];
$footer_sites = [
  "DC",
  "MAD Magazine",
  "DC Kids",
  "DC Universe",
  "DC Power Visa",
];
@endphp

<footer>
  {{-- Footer top --}}
  <div class="_footer-top">
    <div class="container">

      <section class="_footer-logo">
        <ul class="d-inline-block">

          <ul class="_footer-dc-comics">
            <li><h4>DC COMICS</h4></li>
            @foreach($nav_link as $value)
            <li >
              <a href="#"><h5>{{ $value['text'] }}</h5></a>
            </li>
            @endforeach
          </ul>
          
          <ul class="_footer-shop">
            <li><h4>SHOP</h4></li>
            @foreach($footer_shop as $value)
            <li>
              <a href="#"><h5>{{ $value }}</h5></a>
            </li>
            @endforeach
          </ul>
        </ul>


        <ul class="_footer-dc-site">
          <li><h4>DC</h4></li>
          @foreach($footer_dc as $value)   
          <li>
            <a href="#"><h5>{{ $value }}</h5></a>
          </li>
          @endforeach
        </ul>

        <ul class="_footer-dc-site">
          <li><h4>SITES</h4></li>
          @foreach($footer_sites as $value)
          <li>
            <a href="#"><h5>{{ $value }}</h5></a>
          </li>
          @endforeach
        </ul>

        <h5 class="_cookies">All site Content TM and 2020 DC Entertainment, unless otherwise <a href="#">noted Here</a>. All rights reserved.<br><a href="#">Cookies Settings</a></h5>

      </section>
    </div>
  </div>


  {{-- Footer bottom --}}
  <div class="_footer-bottom">
    <div class="container">
      <div class="_box-grey">

        <a href="#" class="_btn-border">Sign-up now!</a>

        <div class="_follow">
          <h4>FOLLOW US</h4>
          <ul class="d-inline-block">
            @foreach($follow as $value)
            <li class="d-inline-block">
              <a href="#"><img src="{{ $value['img'] }}" alt="{{ $value['alt'] }}"></a>
            </li>
            @endforeach
          </ul>
        </div>

      </div>
    </div>
  </div>

</footer>