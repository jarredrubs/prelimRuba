<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/items', function () {
    return view('items');
})->name('items');

Route::get('/pics', function () {
    return view('pics');
})->name('pics');