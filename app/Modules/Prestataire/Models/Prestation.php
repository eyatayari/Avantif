<?php

namespace App\Modules\Prestataire\Models;

use App\FacturePrestation;
use App\Modules\Facture\Models\Facture;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{

    protected $fillable = ['prestation_title', 'description', 'price', 'prestataire_id'];

    public function Prestataire()
    {
        return $this->belongsTo(Prestataire::class);
    }

    public function factures()
    {
        return $this->belongsToMany(Facture::class)->withPivot('nbr');
    }
}
