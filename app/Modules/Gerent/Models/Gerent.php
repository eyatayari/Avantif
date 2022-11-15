<?php

namespace App\Modules\Gerent\Models;

use Illuminate\Database\Eloquent\Model;

class Gerent extends Model
{
    protected $guard = 'Gerent';
    protected $fillable=['nom','prenom','login','mdp','image','email','adresse'];

}
