<?php

namespace App\Modules\Prestataire\Http\Controllers;

use App\Http\Controllers\Controller;
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
        return view("Prestataire::profile");
    }
}
