<?php

namespace App\Modules\Prestataire\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Prestataire\Models\Prestataire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function StorePrestataire(Request $request)
    {
        $prestataire = new Prestataire();

        $prestataire->civilité = $request->civilité;
        $prestataire->nom = $request->nom;
        $prestataire->prenom = $request->prenom;
        $prestataire->email = $request->email;
        $prestataire->login=$request->login;
        $prestataire->adresse = $request->adresse;
        $prestataire->telephone=$request->telephone;
        if($request->statut='on'){
        $prestataire->statut = true;
        }
        $prestataire->pays = $request->pays;
        if ($request->hasFile('image_pres')) {
            $file = $request->file('image_pres');
            $filename = $file->getClientOriginalName();
            //$extension = $file->getClientOriginalExtension();
            $picture = '-' . $filename;

            $destinationPath = public_path("assets/img/prestataires");
            $file->move($destinationPath, $picture);
            $prestataire->image = $picture;
        }
        $this->sendEmail($request);
        $prestataire->mdp=bcrypt("123456");

        $prestataire->save();
       return redirect()->route('list-prestataire');


    }
    public function GetProfile(){
        return view("Prestataire::profile");
    }

    public function sendEmail(Request $data){
        Mail::send('email.plain_text', [ //view page
            'message_txt' => $data->mdp //Data for the page
        ], function ($message) use ($data){
            $message->from('avantif@gmail.com', 'Gmail');
            $message->subject("generation password");
            $message->to($data->email);
        });
    }
}