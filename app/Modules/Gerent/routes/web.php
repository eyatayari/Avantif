<?php

use Illuminate\Support\Facades\Route;
//Route::group(['middleware' => 'auth:gerent'],function (){

Route::get('gerent', 'GerentController@welcome')->name("dashboard-gerent");
Route::get("add-product",'ProduitController@GetAddProduct')->name("add-product");
Route::get("get-products",'ProduitController@GetAllProduct')->name("all-product");
Route::post("store-product",'ProduitController@AddProduct')->name("store-produit");
Route::get('profile','GerentController@GetProfile')->name('profile-gerent');
Route::get('dashboard-gerent',function (){
   return view('Gerent::dashboard-gerent');
});
Route::post("/store/client",'GerentController@storeClient')->name('store-client');
Route::get('add-client',function (){
    return view('Gerent::ajout-client');
})->name('add-client');
Route::get('/delete/{id}','GerentController@deleteClient')->name("delete-client");
Route::patch('update/gerent/{id}',"GerentController@updateGerent")->name("update-gerent");
//});


