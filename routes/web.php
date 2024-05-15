<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $comics = config('db.comics');
    return view('comics.index', compact('comics'));
})->name('home');

Route::get('/comic/{id}', function ($id) {
    $comics = config('db.comics');
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('comic.show');