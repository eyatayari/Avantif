<?php

use Illuminate\Support\Facades\Route;

Route::get('factures', 'FactureController@GetAllFactures')->name("all-factures");
Route::get('facture-delete/{numFacture}', 'FactureController@DeleteFacture')->name("delete-facture");
Route::get('add-factures', 'FactureController@DisplayAddFacture')->name("add-facture");

Route::get('facture', 'FactureController@DisplayAddFactureTest')->name("facture");
Route::post('store-facture','FactureController@store')->name("facture.store");
Route::get('getPrestations', 'FactureController@getPrestations');
Route::get('getProduits', 'FactureController@getProduits');