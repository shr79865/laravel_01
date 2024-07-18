<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $n = "Notice";
    return view('home', compact('n'));
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/search/{q}', function ($q) {
    return($q);
});
