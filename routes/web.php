<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/categorie', function () {
    return view('categorie', ['name' => 'kamal' , 'age' => 20]);
});
