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

Route::get('/', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('home', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('home');

Route::get('/comics', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('comics', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('comics');


Route::get('/movies', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('movies', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('movies');


Route::get('/games', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('games', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('games');


Route::get('/videos', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('videos', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('videos');


Route::get('/tv', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('tv', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('tv');


Route::get('/collectibles', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('movies', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('collectibles');


Route::get('/fans', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('fans', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('fans');


Route::get('/news', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('news', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('news');


Route::get('/shop', function () {

    $comics = config('comics');

    $preFooters = config('prefooters');

    $menus = config('menus');

    $socials = config('socials');

    return view('shop', ['comics' => $comics, 'prefooters' => $preFooters, 'menus' => $menus, 'socials' => $socials]);
})->name('shop');


