<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Comics
Route::get("/comics", function () {
  $dati_comics = config("comics");

  return view("comics.index", [
    "dati_comics"=> $dati_comics,
  ]);
})->name("comics.index");


// Details
Route::get('/comics/{id?}', function ($id) {
  $dati_comics = config('comics');

  if ($id >= 0 && $id < count($dati_comics)) {
    $comic = $dati_comics[$id];

    return view('comics.details', ['comic' => $comic]);

  } else {
    abort('404');
  }
})->name('comics.details');



Route::get("/characters", function () {
  return view(abort('404'));
})->name("characters.index");

Route::get("/movie", function () {
  return view(abort('404'));
})->name("movie.index");

Route::get("/tv", function () {
  return view(abort('404'));
})->name("tv.index");

Route::get("/games", function () {
  return view(abort('404'));
})->name("games.index");

Route::get("/collectibles", function () {
  return view(abort('404'));
})->name("collectibles.index");

Route::get("/videos", function () {
  return view(abort('404'));
})->name("videos.index");

Route::get("/fans", function () {
  return view(abort('404'));
})->name("fans.index");

Route::get("/news", function () {
  return view(abort('404'));
})->name("news.index");

Route::get("/shop", function () {
  return view(abort('404'));
})->name("shop.index");





  

