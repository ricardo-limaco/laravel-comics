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
  <div class="footer-top">
    <div class="container">

      <section class="footer-logo">
        <ul class="footer-dc-comics-shop">
          <ul class="footer-dc-comics">
            <li><a href="#"><h4>DC COMICS</h4></a></li>
            @foreach($nav_link as $value)
            <li >
              <a href="#">{{ $value['text'] }}</a>
            </li>
            @endforeach
          </ul>
          
          <ul class="footer-shop">
            <li><a href="#"><h4>SHOP</h4></a></li>
            @foreach($footer_shop as $value)
            <li>
              <a href="#">{{ $value }}</a>
            </li>
            @endforeach
          </ul>
        </ul>

        <ul class="footer-dc">
          <li><a href="#"><h4>DC</h4></a></li>
          @foreach($footer_dc as $value)   
          <li>
            <a href="#">{{ $value }}</a>
          </li>
          @endforeach
        </ul>

        <ul class="footer-sites">
          <li><a href="#"><h4>SITES</h4></a></li>
          @foreach($footer_sites as $value)
          <li>
            <a href="#">{{ $value }}</a>
          </li>
          @endforeach
        </ul>

        <h5>All site Content TM and 2020 DC Entertainment, unless otherwise <a href="#">noted Here</a>. All rights reserved.<br><a href="#">Cookies Settings</a> </h5>

      </section>
    </div>
  </div>


  {{-- Footer bottom --}}
  <div class="footer-bottom">
    <div class="container">
      <div class="padding">

        <a href="#" class="button">Sign-up now!</a>

        <div class="follow">
          <h3>FOLLOW US</h3>
          <ul>
            @foreach($follow as $value)
            <li>
              <a href="#"><img src="{{ $value['img'] }}" alt="{{ $value['alt'] }}"></a>
            </li>
            @endforeach
          </ul>
        </div>

      </div>
    </div>
  </div>

</footer>