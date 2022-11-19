<?php

use Illuminate\Support\Facades\Route;

Route::get('clients', 'ClientController@GetClients')->name("get-clients");
Route::get('factures-client/{id}','ClientController@GetFactureByClient')->name("FactureById");