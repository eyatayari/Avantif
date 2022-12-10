<?php

namespace App\Modules\Prestataire\Models;

use App\FacturePrestation;
use App\Modules\Facture\Models\Facture;
use Illuminate\Database\Eloquent\Model;

class prestation extends Model
{
    protected $table="prestations";
        protected $fillable=['prestation_title','description','price','prestataire_id'];
    public function Prestataire(){
        return $this->belongsTo(Prestataire::class);
    }
    public function factures(){
        return $this->hasManyThrough(
        // required
            Facture::class, // the related model
            FacturePrestation::class, // the pivot model

            // optional
            'prestation_id', // the current model id in the pivot
            'id', // the id of related model
            'id', // the id of current model
            'facture_id' // the related model id in the pivot
        );
    }
}
