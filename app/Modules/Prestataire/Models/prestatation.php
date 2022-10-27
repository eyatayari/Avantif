<?php

namespace App\Modules\Prestataire\Models;

use Illuminate\Database\Eloquent\Model;

class prestatation extends Model
{
    public function Prestataire(){
        $this->belongsTo('App/Modules/Prestataire/Models/Prestataire');
    }
}
