<?php

namespace App\Modules\Prestataire\Models;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
<<<<<<< HEAD
    protected $guard = 'Prestataire';
    protected $fillable=['nom','prenom','login','mdp','image','email','adresse'];
    public function prestations(){
        return $this->hasMany('App\Modules\Prestataire\Models\prestation');

    }
=======
    //
>>>>>>> d5d57214606dba847c87d56471a752f7fec88bdf
}
