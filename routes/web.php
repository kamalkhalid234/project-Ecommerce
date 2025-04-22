<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


Route::get('/', function () {


    // affiche elemte de la table BD avec get tou
    $result = DB::table('categories')->get();

     // spefique un elemet de la tabel
    // $result = DB::table('categories')->where('nomCategories', 'tele')->get();


    // dd
    // dd($result);
    return view('welcome',['categories' =>    $result]);
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/categorie', function () {
    // return view('categorie', ['name' => 'kamal' , 'age' => 20]);
    return view('categorie');


});
