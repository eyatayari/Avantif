<?php

use Illuminate\Support\Facades\Route;

Route::get('prestataire', 'PrestataireController@welcome')->name("prestataire");
Route::get('add-prestataire', 'PrestataireController@GetAddPrestatairePage')->name("add-prestataire");
Route::get('list-prestataire', 'PrestataireController@GetListPrestataires')->name("list-prestataire");