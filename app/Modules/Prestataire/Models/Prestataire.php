<?php

namespace App\Modules\Prestataire\Models;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{

    protected $guard = 'Prestataire';
    protected $fillable=['nom','prenom','login','image','telephone','email','adresse','statut','pays','civilité'];
    public function prestations(){
        return $this->hasMany('App\Modules\Prestataire\Models\prestation');

    }

}
