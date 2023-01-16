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
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    $comics = config('comics');
    return view('guest.home', [
        'headermenu'=> $headermenu,
        'comics'=> $comics,
        'footermenu'=> $footermenu,
    ]);
})->name('home');


Route::get('/characters', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.characters', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('characters');

Route::get('/comics', function () {
    $headermenu = config('headermenu');
    $comics = config('comics');
    $footermenu = config('footermenu');
    return view('guest.comics', [
        'headermenu'=> $headermenu,
        'comics'=> $comics,
        'footermenu'=>  $footermenu,
    ]);
})->name('comics');

Route::get('/movies', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.movies', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('movies');

Route::get('/tv', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.tv', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('tv');

Route::get('/games', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.games', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('games');

Route::get('/collectibles', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.collectibles', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.videos', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('videos');

Route::get('/fans', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.fans', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('fans');

Route::get('/news', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.news', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('news');

Route::get('/shop', function () {
    $headermenu = config('headermenu');
    $footermenu = config('footermenu');
    return view('guest.shop', [
        'headermenu'=> $headermenu,
        'footermenu'=> $footermenu,
    ]);
})->name('shop');

Route::get('/single', function () {
    $headermenu = config('headermenu');
    $comics =config('comics');
    $footermenu = config('footermenu');
    return view('guest.single', [
        'headermenu'=> $headermenu,
        'comics'=> $comics,
        'footermenu'=> $footermenu,
    ]);
})->name('single');
