<?php


Route::get('/', function () {
    return view('welcome');
});


Route::get('/main', function () {
    return view('main');
});
