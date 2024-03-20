<?php

use Illuminate\Support\Facades\Route;

Route::get('/post/{slug}', function ($slug) {
    return $slug;
});

Route::get('/', function () {
    return view('welcome');
});
