<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/lets-talk', function () {
    return view('lets-talk');
});

