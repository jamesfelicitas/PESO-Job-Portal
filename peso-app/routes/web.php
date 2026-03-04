<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/history', function () {
    return view('about.history');
});

Route::get('/about/mission', function () {
    return view('about.mission');
});

Route::get('/about/vision', function () {
    return view('about.vision');
});
