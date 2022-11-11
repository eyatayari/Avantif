<?php

namespace App\Modules\Prestataire\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Prestataire\Models\Prestataire;
use Illuminate\Http\Request;

class PrestataireController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Prestataire::welcome");
    }

    public function GetListPrestataires()
    {
        $prestataires = Prestataire::all();
        return view("Prestataire::liste-prestataires")->with("prestataires", $prestataires);
    }

    public function GetAddPrestatairePage()
    {
        return view("Prestataire::ajout-prestataire");


    }
}
