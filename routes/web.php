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

$menu = config('menu');

Route::get('/', function () use ($menu) {

        $data = [
            'menu' => $menu
        ]; 
    return view('home', $data);
})->name('homepage');

Route::get('/characters', function() use($menu) {
        $data = [
            'menu' => $menu
        ]; 
    return view('characters', $data);
})->name('characters');


Route::get('/movies', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('movies', $data);
})->name('movies');

Route::get('/comics', function() use($menu) {
    $comics = config('comics');

    $data = [
        'menu' => $menu,
        'comics' => $comics
    ]; 
    return view('comics', $data);
})->name('comics');

Route::get('/tv', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('tv', $data);
})->name('tv');

Route::get('/games', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('games', $data);
})->name('games');

Route::get('/collectables', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('collectables', $data);
})->name('collectables');

Route::get('/videos', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('videos', $data);
})->name('videos');

Route::get('/fans', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('fans', $data);
})->name('fans');

Route::get('/news', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('news', $data);
})->name('news');

Route::get('/shop', function() use($menu) {
    $data = [
        'menu' => $menu
    ]; 
    return view('shop', $data);
})->name('shop');

Route::get('/comics/{id}', function($id) use ($menu) {
    $comics = collect(config('comics'));
    $current_comic = $comics->where('id', $id)->first();
    $data = [
        'menu' => $menu,
        'comics' => $current_comic
    ]; 
    return view('single-comic', $data);
    return view('single-comic');
})->name('single-comic');
