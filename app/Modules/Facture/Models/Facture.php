<?php

namespace App\Modules\Facture\Models;

use App\Modules\Client\Models\Client;
use App\Modules\Gerent\Models\produit;
use App\Modules\Prestataire\Models\Prestataire;
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
    public function prestataire(){
        $this->belongsTo(Prestataire::class);
    }
    public function client(){
        $this->belongsTo(Client::class);
    }
    public function produits(){
        $this->hasMany(produit::class);}
}
