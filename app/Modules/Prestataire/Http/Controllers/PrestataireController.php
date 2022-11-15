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
    public function StorePrestataire(Request $request){
        $prestataire = new Prestataire();
        $prestataire->nom =$request->nom;
        $prestataire->prenom=$request->prenom;
        $prestataire->email=$request->email;
        $prestataire->adresse=$request->adresse;
        $prestataire->mdp=bcrypt($request->mdp);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = date('His') . '-' . $filename;
            $file->move(public_path('img/prestataires'), $picture);
            $prestataire->image =  $picture;}
            $prestataire->save();
        return redirect()->route('');


    }
}
