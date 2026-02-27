<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/tentang/sejarah', function () {
    return view('sejarah');
})->name('sejarah');

Route::get('/tentang/visi-misi', function () {
    return view('visimisi');
})->name('visimisi');

Route::get('/tentang/ad-art', function () {
    return view('adart');
})->name('adart');

Route::get('/tentang/struktur-organisasi', function () {
    return view('struktur');
})->name('struktur');

Route::get('/program', function () {
    return view('program');
})->name('program');

Route::get('/fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');

Route::get('/galeri', function () {
    return view('galeri');
})->name('galeri');

Route::get('/pendaftaran', function () {
    return view('pendaftaran');
})->name('pendaftaran');

Route::get('/hubungi', function () {
    return view('hubungi');
})->name('hubungi');
