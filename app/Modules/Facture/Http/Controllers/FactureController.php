<?php

namespace App\Modules\Facture\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
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
    {
        $factures = Facture::with("client", "prestation")->paginate(8);
        //var_dump($factures);
        return view("Facture::liste-factures")->with("factures", $factures);
    }

    public function DeleteFacture($numFacture)
    {
        Facture::query("select * from Facture where numfacture == ", $numFacture)->delete();

        return redirect()->route("all-factures");
    }

    public function DisplayAddFacture()
    {
        //todo add only prestations of logged prestataire
        //$facture= Facture::query("select numFacture from factures")->last() + 1;

        $prestations = prestation::all();
        $clients = Client::all();
        $produits = produit::all();

        return view("Facture::ajout-facture")->with("prestations", $prestations)->with("produits", $produits)->with("clients", $clients);
    }

    public function DisplayAddFactureTest()
    {

        $prestations = prestation::all();
        $clients = Client::all();
        $produits = produit::all();

        return view("Facture::test")->with("prestations", $prestations)->with("produits", $produits)->with("clients", $clients);

    }


    public function store(Request $request)
    {
        // dd($request);
        $facture = new Facture();


        $facture->DateFacture = $request->input('DateFacture');
        $facture->client_id = $request->input('client');

        $facture->mode_paiement = $request->mode_paiement;

        $rows = $request->input('prestations');
        $quantities = $request->input('quantitePrest');
        // dd($rows);

        for ($i = 0; $i < count($rows); $i++) {
            $prestations[] = [

                'id' => $rows[$i],
                'nbr' => $quantities[$i]

            ];
        }

        foreach ($prestations as $prestation) {
            $pres = prestation::find($prestation['id']);
            $price = $pres->price;
            $facture->totalFacture += $prestation['nbr'] * $price;


        }

        /* foreach ($rows as $row) {
             foreach ($quantities as $quantity){
             //dd($row);
             $prestations[] = [

                 'id' => $row,
                 'nbr'=>$quantity

             ];
             }
         }*/
        // dd($prestations);

        $facture->prestations()->save($prestations);
        dd($facture);
        $facture->save();
    }

    public function getPrestations()
    {
        $prestations = prestation::all();
        //dd($prestations);
        return response()->json($prestations);
    }

    public function getProduits()
    {
        $produits = produit::all();
        //dd($prestations);
        return response()->json($produits);
    }

}
