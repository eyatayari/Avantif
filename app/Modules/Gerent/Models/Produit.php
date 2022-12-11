<?php

namespace App\Modules\Gerent\Models;

use App\Modules\Facture\Models\Facture;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable=['nomProduit','nbrStock','categorie','photo_produit','prix','description'];
    public function factures()
    {
        return $this->belongsToMany(Facture::class)->withPivot('nbr');
    }
}
