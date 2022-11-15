<?php

namespace App\Modules\Facture\Models;

use App\Modules\Prestataire\Models\Prestataire;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    public function client(){
        //$this->belongsTo
    }
    public function prestataire(){
        $this->belongsTo(Prestataire::class);
    }
}
