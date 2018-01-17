<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sharp', function () {
    return view('sharp');
});
