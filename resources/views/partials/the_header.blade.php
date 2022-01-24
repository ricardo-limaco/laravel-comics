@php
$routeName = Request::route()->getName();
@endphp

<header>
  {{-- Navbar Top --}}
  <div class="_navbar-top">
    <div class="container">
      <ul>
        <li>
          <a href="">
            <h5>DC POWER VISA</h5>
          </a>
        </li>
        <li>
          <a href="">
            <h5>ADDITIONAL DC SITE <i class="fas fa-caret-down"></i></h5>
          </a>
        </li>
      </ul>


    </div>
  </div>

  
  {{-- Navbar --}}
  <div class="container">

    <div class="_page-header">
      <a href="#">
        <img src="{{ asset('img/dc-logo.png') }}" alt="dc-logo" class="_logo">
      </a>
      
      <ul class="_navbar">
        @foreach($nav_link as $value)
        <li class="_navbar-item">
          @php
          $prefix = explode(".", $value["route"])[0];
          $active = strpos($routeName, $prefix) === 0;
          @endphp

          <a href="{{ route($value['route']) }}" class="{{ $active ? '_nav-active' : '' }}">{{ $value['text'] }}</a>
        </li>
        @endforeach

        <li class="d-inline-block position-relative _search">
          <div class="">
            <input type="text" placeholder="Search" class="_search-input">
            <h5><i class="fas fa-search"></i></h5>
          </div>
        </li>
      </ul>
    </div>

  </div>

  {{-- Jumbotron --}}
<section class="_jumbotron">
</section>
</header>