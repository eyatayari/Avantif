<?php

namespace App\Modules\Gerent\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Client\Models\Client;
use App\Modules\Gerent\Models\Gerent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GerentController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */

    public function welcome()
    {
        return view("Gerent::dashboard-gerent");
    }

    public function GetProfile()
    {
        $gerent=Gerent::find(Auth::guard("gerent")->id());
        return view("Gerent::profile")->with("gerent",$gerent);
    }

    public function storeClient(Request $request)
    {//dd($request);
        $client = new Client();
        $client->civilité = $request->civilité;
        $client->name = $request->nom .' '. $request->prenom;
        $client->email = $request->email;
        $client->telephone = $request->telephone;
        $client->mobile = $request->mobile;
        $client->pays = $request->pays;
        $client->ville = $request->ville;
        $client->rue = $request->rue;
        $client->refnom = $request->refnom;
        $client->refemail = $request->refemail;
        $client->refmobile = $request->refmobile;


        if ($request->hasFile('photo_client')) {
            $file = $request->file('photo_client');
            $filename = $file->getClientOriginalName();
            //$extension = $file->getClientOriginalExtension();
            $picture = '-' . $filename;

            $destinationPath = public_path("assets/img/clients");
            $file->move($destinationPath, $picture);
            $client->image = $picture;
            //here you can define any directory name whatever you want, if dir is not exist it will created automatically.
        }
        $client->password=bcrypt($request->email);
        if($request->statut='on'){
            $client->active = true;
        }

        $client->save();
        return redirect()->route("get-clients");
    }

    public function deleteClient($id){
        Client::find($id)->delete();
        return redirect()->route("get-clients");
    }
    public function updateGerent(Request $request,$id){

        Gerent::where("id", $id)->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'adresse' => $request->addresse,
            'email' => $request->email,
            'mobile' => $request->mobile,


        ]);
        return redirect()->route('profile-gerent');
    }
}
