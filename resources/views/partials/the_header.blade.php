@php
$routeName = Request::route()->getName();
@endphp

<header>
  <div class="navbar-top">
    <div class="container">
      <h5>DC POWER VISA</h5>
      <h5>ADDITIONAL DC SITE</h5>
    </div>
  </div>


  <div class="container">

    <div class="page-header">
      <a href="#">
        <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo" class="logo">
      </a>
      
      <ul class="_navbar">

        @foreach($nav_link as $value)
        <li class="navbar-item">
          @php
          $prefix = explode(".", $value["route"])[0];
          $active = strpos($routeName, $prefix) === 0;
          @endphp

          <a href="{{ route($value['route']) }}" class="{{ $active ? 'nav-active' : '' }}">{{ $value['text'] }}</a>
        </li>
        @endforeach

      </ul>
    </div>

  </div>

  {{-- Jumbotron --}}
<section class="jumbotron">
  <div class="container">
    <a href="#" class="btn-large">CURRENT SERIES</a>
  </div>
</section>
</header>