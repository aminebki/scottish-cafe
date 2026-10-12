<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/karaoke', function () {
    return view('pages.karaoke');
})->name('karaoke');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/reservation', function () {
    return view('pages.reservation');
})->name('reservation');