<?php

namespace App\Modules\Prestataire\Models;

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
        return $this->belongsToMany(Facture::class,'factures','facture_id');
    }
}
