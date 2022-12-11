<?php

namespace App\Modules\Facture\Models;

use App\FacturePrestation;
use App\Modules\Client\Models\Client;
use App\Modules\Gerent\Models\produit;
use App\Modules\Prestataire\Models\Prestataire;
use App\Modules\Prestataire\Models\Prestation;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    protected $fillable = [
        'numFacture',
        'DateFacture',
        'mode_paiement',
        'notes',
        'totalFacture',
        'client_id',
    ];

    public function prestations()
    {

        return $this->belongsToMany(Prestation::class)->withPivot('nbr');
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class)->withPivot('nbr');
    }
}
