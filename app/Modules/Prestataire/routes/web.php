<?php

use Illuminate\Support\Facades\Route;

//Route::group(['middleware' => 'auth:prestataire','web','prestataire'], function() {
//\Illuminate\Support\Facades\Auth::routes();
    Route::get('prestataire', 'PrestataireController@welcome')->name("prestataire");
    Route::get('add-prestataire', 'PrestataireController@GetAddPrestatairePage')->name("add-prestataire");
    Route::get('list-prestataire', 'PrestataireController@GetListPrestataires')->name("list-prestataire");
    Route::post('store', 'PrestataireController@StorePrestataire')->name("store-prestataire");
    Route::get('profile-prestataire', 'PrestataireController@GetProfile')->name("profile-prestataire");
Route::get('dashboard-prestataire',function (){
    return view('Prestataire::dashboard-prestataire');
});
Route::get("update/{id}", 'PrestataireController@editPrestataire')->name('edit-prestataire');
Route::patch('update/prestataire/{id}','PrestataireController@update')->name("update-prestataire");
//});

Route::get('delete/prestataire/{id}','PrestataireController@DeletePrestataire')->name("delete-prestataire");