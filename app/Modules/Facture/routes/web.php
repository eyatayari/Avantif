<?php

use App\Modules\Facture\Models\Facture;
use App\Modules\Prestataire\Models\Prestation;
use Illuminate\Support\Facades\Route;

Route::get('factures', 'FactureController@GetAllFactures')->name("all-factures");
Route::get('facture-delete/{numFacture}', 'FactureController@DeleteFacture')->name("delete-facture");
Route::get('add-factures', 'FactureController@DisplayAddFacture')->name("add-facture");

Route::get('facture/{numFacture}', 'FactureController@DisplayAddFactureTest')->name("facture");
Route::post('store-facture','FactureController@store')->name("facture.store");
Route::get('getProduits', 'FactureController@getProduits');
Route::get('pdf/{numFacture}','FactureController@GenererPdf')->name('imprimer');

/*Route::get('/test',function (){
    $facture=Facture::where("numFacture",1)->with('prestations')->first();
    //$prestation=Prestation::find(1)->with('factures')->get();
    dd($facture);

});*/