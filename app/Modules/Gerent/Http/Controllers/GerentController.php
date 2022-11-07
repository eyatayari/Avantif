<?php

namespace App\Modules\Gerent\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GerentController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("Gerent::ajout-client");      
    }

}
