<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
Route::get('prestataire', 'PrestataireController@welcome')->name("prestataire");
Route::get('add-prestataire', 'PrestataireController@GetAddPrestatairePage')->name("add-prestataire");
Route::get('list-prestataire', 'PrestataireController@GetListPrestataires')->name("list-prestataire");
=======

Route::get('prestataire', 'PrestataireController@welcome')->name("prestataire");
Route::get('add-prestataire', 'PrestataireController@GetAddPrestatairePage')->name("add-prestataire");
Route::get('list-prestataire', 'PrestataireController@GetListPrestataires')->name("list-prestataire");
Route::post('store', 'PrestataireController@StorePrestataires')->name("store-prestataire");
>>>>>>> 6bd69e1a9ebfca9f78be77e4e5b9e2845bbdebaa
