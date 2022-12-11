<?php

namespace App\Modules\Facture\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
use App\Modules\Facture\Models\Facture;
use App\Modules\Gerent\Models\produit;
use App\Modules\Prestataire\Models\prestation;
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

            $facture->prestations()->attach($facture->numFacture,

                ['prestation_id'=>$prestation['id'],
                    'facture_id'=>$facture->numFacture,
                    'nbr'=>$prestation['nbr']]
            );
        }
        $facture->notes='nothing to mention';

        /* foreach ($rows as $row) {
             foreach ($quantities as $quantity){
             //dd($row);
             $prestations[] = [

                 'id' => $row,
                 'nbr'=>$quantity

             ];
             }
         }*/

       // dd($facture->with('prestations')->get());
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

    public function GenererPdf($numfacture)
    {
        $facture = Facture::where('numFacture', $numfacture)->with(['client'])->first();
        //$pdf = App::make('dompdf.wrapper');

        // dd(Facture::with('produits')->get());
        $pdf = PDF\Pdf::loadView('Facture::FacturePDF', [
            'numFacture' => $facture->numFacture,
            'total' => $facture->totalFacture,
            'DateFacture' => $facture->DateFacture,
            'client' => $facture->client->name,
            'mode_paiement' => $facture->mode_paiement,
            'prestations' => $facture->prestations,
            'footer' => 'by Avantif'
        ]);
        return $pdf->stream('sample.pdf');
    }

}
