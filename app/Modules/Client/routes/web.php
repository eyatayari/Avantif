<?php

use Illuminate\Support\Facades\Route;

Route::get('clients', 'ClientController@GetClients')->name("get-clients");
Route::get('factures-client/{id}','ClientController@GetFactureByClient')->name("FactureById");
Route::get("liste/rendezVous","ClientController@GetListeRendezVous")->name("rendez-vous");
Route::get('/client/profile','ClientController@GetProfile')->name('client-profile');
Route::get("/reservation",'ClientController@GetReservation')->name("reservation");
Route::get("/reservation2",'ClientController@GetReservation2')->name("reservation2");
Route::get("/reservation3",'ClientController@GetReservation3')->name("reservation3");
Route::get("/reservation4",'ClientController@GetReservation4')->name("reservation4");
Route::get("/reservation5",'ClientController@GetReservation5')->name("reservation5");
