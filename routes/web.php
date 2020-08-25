<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/oxygen/install', function() {

   $pizzas = [
       ['type' => 'hawaiian', 'base' => 'cheesy crust'],
       ['type' => 'volcano', 'base' => 'garlic crust'],
       ['type' => 'veg supreme', 'base' => 'this & crispy']
   ];

   return view('install', ['pizzas' => $pizzas]);
});

Route::get('/oxygen/', function () {

   return view('details');
});
