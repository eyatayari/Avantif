<?php

namespace App\Modules\Client\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
use App\Modules\Facture\Models\Facture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function GetClients()
    {
        $clients = Client::all();
        return view("Client::liste-clients")->with("clients", $clients);
    }

    public function GetFactureByClient($id)
    {
        $factures = Facture::all()->where("client_id", "==", $id);
        var_dump($factures);

    }

    public function GetListeRendezVous()
    {
        return view("Client::liste_rendez-vous");
    }
    public function GetReservation(){
        return view("Client::reservation_step1");
    }
    public function GetReservation2(){
        return view("Client::reservation_step2");
    }
    public function GetReservation3(){
        return view("Client::reservation_step3");
    }
    public function GetReservation4(){
        return view("Client::reservation_step4");
    }
    public function GetReservation5(){
        return view("Client::reservation_step5");
    }
    public function GetProfile(){
        $client=Client::find(Auth::guard('client')->id());
        return view ("Client::profile")->with("client",$client);
    }
}
