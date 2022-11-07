<?php

use Illuminate\Support\Facades\Route;


Route::get('gerent', 'GerentController@welcome');
Route::get("add-product",'ProduitController@GetAddProduct')->name("add-product");
Route::get("get-products",'ProduitController@GetAllProduct')->name("all-product");



