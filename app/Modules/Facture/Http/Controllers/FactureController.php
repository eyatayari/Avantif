<?php

namespace App\Modules\Facture\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
use App\Modules\Facture\Models\Facture;
use App\Modules\Gerent\Models\Produit;
use App\Modules\Prestataire\Models\Prestation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Ramsey\Uuid\Type\Integer;
use Barryvdh\DomPDF\Facade as PDF;

class FactureController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function GetAllFactures()
    {
        $factures = Facture::with("client", "prestations")->paginate(8);
        //var_dump($factures);
        return view("Facture::liste-factures")->with("factures", $factures);
    }

    public function DeleteFacture($numFacture)
    {
        Facture::find($numFacture)->delete();

        return redirect()->route("all-factures");
    }

    public function DisplayAddFacture()
    {
        //todo add only prestations of logged prestataire
        //$facture= Facture::query("select numFacture from factures")->last() + 1;

        $prestations = Prestation::all();
        $clients = Client::all();
        $produits = Produit::all();

        return view("Facture::ajout-facture")->with("prestations", $prestations)->with("produits", $produits)->with("clients", $clients);
    }

    public function DisplayAddFactureTest()
    {

        $prestations = Prestation::all();
        $clients = Client::all();
        $produits = Produit::all();

        return view("Facture::test")->with("prestations", $prestations)->with("produits", $produits)->with("clients", $clients);

    }


    public function store(Request $request)
    {
        // dd($request);
        $facture = new Facture();
        $facture->DateFacture = $request->input('DateFacture');
        $facture->client_id = $request->input('client');
        $facture->mode_paiement = $request->mode_paiement;
        $rows_prestations = $request->input('prestations');
        $rows_produits = $request->input('produits');
        $quantitiesprod=$request->input('quantiteProd');
        $quantities = $request->input('quantitePrest');
        for ($i = 0; $i < count($rows_prestations); $i++) {
            $prestations[] = [

                'id' => $rows_prestations[$i],
                'nbr' => $quantities[$i]

            ];
        }
        for ($i = 0; $i < count($rows_produits); $i++) {
            $produits[] = [

                'id' => $rows_produits[$i],
                'nbr' => $quantitiesprod[$i]

            ];
        }


        $facture->notes = 'nothing to mention';

        /* foreach ($rows as $row) {
             foreach ($quantities as $quantity){
             //dd($row);
             $prestations[] = [

                 'id' => $row,
                 'nbr'=>$quantity

             ];
             }
         }*/
        foreach ($prestations as $prestation) {
            $pres = Prestation::find($prestation['id']);

            $facture->totalFacture += $prestation['nbr'] * $pres->price;
        };
        foreach ($produits as $produit) {
            $prod = Produit::find($produit['id']);

            $facture->totalFacture += $produit['nbr'] * $prod->prix;
        };
        // dd($facture->with('prestations')->get());
        $facture->save();
        foreach ($prestations as $prestation) {


            $facture->prestations()->attach($prestation['id'],

                ['nbr' => $prestation['nbr']]
            );
        }
        foreach ($produits as $produit) {


            $facture->produits()->attach($produit['id'],

                ['nbr' => $produit['nbr']]
            );
        }
    }

    public function getPrestations()
    {
        $prestations = Prestation::all();
        //dd($prestations);
        return response()->json($prestations);
    }

    public function getProduits()
    {
        $produits = Produit::all();
        //dd($prestations);
        return response()->json($produits);
    }

    public function GenererPdf($numfacture)
    {
        $facture = Facture::find($numfacture)->with(['client', 'prestations','produits'])->first();
        //$pdf = App::make('dompdf.wrapper');

        // dd($facture);
        $pdf = PDF\Pdf::loadView('Facture::FacturePDF', [
            'id' => $facture->id,
            'total' => $facture->totalFacture,
            'DateFacture' => $facture->DateFacture,
            'client' => $facture->client->name,
            'mode_paiement' => $facture->mode_paiement,
            'prestations' => $facture->prestations,
            'produits'=>$facture->produits,

        ]);
        return $pdf->stream('sample.pdf');
    }

}
