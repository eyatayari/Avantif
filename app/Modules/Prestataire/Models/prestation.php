<?php

namespace App\Modules\Prestataire\Models;

use Illuminate\Database\Eloquent\Model;

class prestation extends Model
{
    public function Prestataire(){
        $this->belongsTo(Prestataire::class);
    }
}
