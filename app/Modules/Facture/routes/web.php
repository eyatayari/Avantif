<?php

use Illuminate\Support\Facades\Route;

Route::get('factures', 'FactureController@GetAllFactures')->name("all-factures");
Route::get('facture-delete/{numFacture}', 'FactureController@DeleteFacture')->name("delete-facture");