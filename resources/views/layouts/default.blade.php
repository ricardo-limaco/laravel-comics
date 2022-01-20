@php
$nav_link = [
  [
    "text"=> "Characters",
    "route"=> "characters.index"
  ],
  [
    "text"=> "Comics",
    "route"=> "comics.index"
  ],
  [
    "text"=> "Movie",
    "route"=> "movie.index"
  ],
  [
    "text"=> "Tv",
    "route"=> "tv.index"
  ],
  [
    "text"=> "Games",
    "route"=> "games.index"
  ],
  [
    "text"=> "Collectibles",
    "route"=> "collectibles.index"
  ],
  [
    "text"=> "Videos",
    "route"=> "videos.index"
  ],
  [
    "text"=> "Fans",
    "route"=> "fans.index"
  ],
  [
    "text"=> "News",
    "route"=> "news.index"
  ],
  [
    "text"=> "Shop",
    "route"=> "shop.index"
  ]
];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  @include("partials.header_scripts")

  <title>@yield('page_title')</title>
</head>

<body>
  @include("partials.the_header")

  <main class="main">
    @yield('content')
  </main>

  @include("partials.the_footer")
</body>

</html>