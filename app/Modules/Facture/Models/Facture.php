<?php

namespace App\Modules\Facture\Models;

use App\FacturePrestation;
use App\Modules\Client\Models\Client;
use App\Modules\Gerent\Models\produit;
use App\Modules\Prestataire\Models\Prestataire;
use App\Modules\Prestataire\Models\prestation;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable=[
        'numFacture',
        'DateFacture',
        'mode_paiement',
        'notes',
        'totalFacture',
        'prestation_id',
        'product_id',
        'client_id',
    ];
    public function prestations(){

        return $this->belongsToMany(
        // required
            prestation::class, // the related model
            FacturePrestation::class, // the pivot model

            // optional
            'facture_id', // the current model id in the pivot
            'id', // the id of related model
            'id', // the id of current model
            'prestation_id' // the related model id in the pivot
        );
    }
    public function client(){
        return$this->belongsTo(Client::class);
    }
    public function produits(){
        return $this->hasMany(produit::class);}
}
