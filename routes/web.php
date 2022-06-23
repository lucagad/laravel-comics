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
});
