<?php

namespace App\Modules\Facture\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Facture\Models\Facture;
use Illuminate\Http\Request;

class FactureController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function GetAllFactures()
    {$factures=Facture::with("client","prestataire")->paginate(8);
        return view("Facture::liste-factures");
    }
}
