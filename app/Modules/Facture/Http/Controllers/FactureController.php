<?php

namespace App\Modules\Facture\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FactureController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Facture::welcome");
    }
}
