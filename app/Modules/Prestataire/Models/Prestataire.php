<?php

namespace App\Modules\Prestataire\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Prestataire extends Authenticatable
{ use Notifiable;

    protected $guard = 'prestataire';
    protected $fillable=['nom','prenom','login','image','telephone','email','adresse','statut','pays','civilité','password'];
    protected $hidden=['password'];
    public function prestations(){
        return $this->hasMany('App\Modules\Prestataire\Models\prestation');

    }

}
