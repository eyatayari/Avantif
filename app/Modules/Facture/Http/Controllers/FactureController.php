<?php

namespace App\Modules\Facture\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Facture\Models\Facture;
use App\Modules\Gerent\Models\produit;
use App\Modules\Prestataire\Models\prestation;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class FactureController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function GetAllFactures()
    {$factures=Facture::with("client","prestation")->paginate(8);
    //var_dump($factures);
        return view("Facture::liste-factures")->with("factures",$factures);
    }
    public function DeleteFacture($numFacture){
        Facture::query( "select * from Facture where numfacture == ",$numFacture)->delete();

        return redirect()->route("all-factures");
    }
    public function DisplayAddFacture(){
        $prestations=prestation::all();
        //todo add only prestations of logged prestataire
        $produits=produit::all();

        return view("Facture::ajout-facture")->with("prestations",$prestations)->with("produits",$produits);
    }
}
