<?php

use Illuminate\Support\Facades\Route;

Route::get('factures', 'FactureController@GetAllFactures')->name("all-facture");
