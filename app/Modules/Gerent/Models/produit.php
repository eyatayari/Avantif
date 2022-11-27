<?php

namespace App\Modules\Gerent\Models;

use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    protected $fillable=['nomProduit','nbrStock','categorie','photo_produit','prix','description'];

}
