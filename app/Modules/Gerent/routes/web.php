<?php

use Illuminate\Support\Facades\Route;
//Route::group(['middleware' => 'auth:gerent'],function (){

Route::get('gerent', 'GerentController@welcome');
Route::get("add-product",'ProduitController@GetAddProduct')->name("add-product");
Route::get("get-products",'ProduitController@GetAllProduct')->name("all-product");
Route::post("store-product",'ProduitController@AddProduct')->name("store-produit");
Route::get('profile','GerentController@GetProfile')->name('profile-gerent');
Route::get('dashboard-gerent',function (){
   return view('Gerent::dashboard-gerent');
});
//});


//\Illuminate\Support\Facades\Auth::routes();