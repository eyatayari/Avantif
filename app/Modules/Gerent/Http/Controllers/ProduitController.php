<?php

namespace App\Modules\Gerent\Http\Controllers;
//use Intervention\Image\Image;

use App\Http\Controllers\Controller;
use App\Modules\Gerent\Models\produit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProduitController extends Controller
{
    public function GetAddProduct(){
        return view("Gerent::ajout-produit");
    }
    public function GetAllProduct(){

        $soins= Produit::where('categorie','=','Soins')->get();

        $coiffants= Produit::where('categorie','=','Coiffants')->get();
        $Colorations= Produit::where('categorie','=','Colaration')->get();
        $Shampoings= Produit::where('categorie','=','Shampoings')->get();
        $beautes= Produit::where('categorie','=','Beaute')->get();
        $Hygienes= Produit::where('categorie','=','Hygiene')->get();
        //var_dump($produits);
        
        return view("Gerent::produits-gerent")->with("Coiffants",
            $coiffants)->with("Soins",$soins)
            ->with("Colorations",$Colorations)
            ->with("Shampoings",$Shampoings)
            ->with("beautes",$beautes)
            ->with("Hygienes",$Hygienes);
    }

    public function AddProduct(Request $request){

      $produit = new produit;
        $produit->nom_produit=$request->nom_produit;
        $produit->categorie=$request->categorie;
        $produit->nbrStock=$request->stock;
        $produit->prix=$request->prix;
        $produit->nom_marque=$request->nom_marque;
        $produit->description=$request->description;
        if ($request->hasFile('photo_produit')) {
            $file = $request->file('photo_produit');
            $filename = $file->getClientOriginalName();
            //$extension = $file->getClientOriginalExtension();
            $picture = '-' . $filename;

            $destinationPath = public_path("assets/img/produits") ;
         $file->move($destinationPath, $picture);
            $produit->photo_produit=  $picture;
            //here you can define any directory name whatever you want, if dir is not exist it will created automatically.
        }
        $produit->save();
        return redirect("/get-products");

    }
}
