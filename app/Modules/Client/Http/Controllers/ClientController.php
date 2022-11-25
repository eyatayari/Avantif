<?php

namespace App\Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
use App\Modules\Facture\Models\Facture;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function GetClients()
    {
        $clients =Client::all();
        return view("Client::liste-clients")->with("clients",$clients);
    }
    public function GetFactureByClient($id){
        $factures=Facture::all()->where("client_id","==",$id);
        var_dump($factures);

    }
}
