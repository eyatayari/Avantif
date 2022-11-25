<?php

namespace App\Modules\Gerent\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Gerent\Models\produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function GetAddProduct(){
        return view("Gerent::ajout-produit");
    }
    public function GetAllProduct(){

        $produits= produit::all()->groupBy("categorie");
        
        return view("Gerent::produits-gerent")->with("produits",$produits);
    }

    public function AddProduct(Request $request){
      $produit = new produit;
        //$produit->nom_produit=$request->nom_produit;
        //$produit->
        if ($request->hasFile('photo_produit')) {
            $file = $request->file('photo_produit');
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $picture = date('His') . '-' . $filename;
            $file->move(public_path('img/produits'), $picture);
            $produit->photo_produit =  $picture;
        }
        $produit->save();

    }
}
