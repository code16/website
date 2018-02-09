<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sharp', function () {
    return view('sharp');
});

Route::get('/home', function () {
    return view('home');
});