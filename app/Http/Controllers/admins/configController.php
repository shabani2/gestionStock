<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\point_vente;
use App\Models\categorieProduit;
use App\Models\Produit;
use App\Models\livraison;

class configController extends Controller
{
    //config formulaire
    public function pointVenteForm(){
        return view('Admin.forms.pvForm');
    }
    public function catForm(){
        return view('Admin.forms.categorieForm');
    }
   
    public function  ProduitForm(){
        $cats = categorieProduit::all();
        return view('Admin.forms.produitForm',compact('cats'));
    } 

    public function  LivraisonForm(){
        $cats = categorieProduit::all();
        $produits = Produit::all()->groupBy('id_categorieProduit');
        //$selectedProduit = Produit::find('id');
        return view('Admin.forms.livraisonForm',[
            'cats'=> $cats,
            'produits'=>$produits,
          //  'selectedProduit'=>$selectedProduit
        ]);
    } 


    //chargement des donnees par un select
    public function chargementProduit($id)
{
    $options = Produit::where('id_categorieProduit', $id)->pluck('name', 'id');
    return response()->json($options);
}



    //configuration form actions

    public function pointVenteSave(Request $request){
        $dataValidation = $request->validate([
            'nompv' => 'required|max:255',
            'emplacement' => 'required|max:255',
        ]            
        ) ;
         $pv =  new point_vente();
         $pv->nompv = $dataValidation['nompv'];
         $pv->emplacement = $dataValidation['emplacement'];
         //dd($pv);
         $pv->save();

        return redirect()->route('vendeur.dashbord');
       
    }

    public function categorieSave(Request $request){
        $dataValidation = $request->validate([
            'nom' => 'required|max:255',
            'unite' => 'required|max:255',
            'image'=> 'required'
        ]            
        ) ;
        $filename = "";
        if($request->hasFile('image')){
            $filename = $request->file('image')->store('vendeurs','public');
        }else{
            $filename = '';
        }
        $path = $filename;
        //dd($path);
         $pv =  new categorieProduit();
         $pv->nom = $dataValidation['nom'];
         $pv->unite = $dataValidation['unite'];
         $pv->image = $filename;
         //dd($pv);
         $pv->save();

        return redirect()->route('vendeur.dashbord');
       
    }

    public function produitSave(Request $request){
        $dataValidation = $request->validate([
            'catId' => 'required',
            'nom' => 'required|max:255',
            'prixunitaire'=> 'required'
        ]            
        ) ;
       
         $pv =  new Produit();
         $pv->nom = $dataValidation['nom'];
         $pv->prixunitaire = $dataValidation['prixunitaire'];
         $pv->id_categorieProduit= $dataValidation['catId'];
         //dd($pv);
         $pv->save();

        return redirect()->route('vendeur.dashbord');
       
    }
    public function LivraisonSave(Request $request){
        $dataValidation = $request->validate([
            'produits' => 'required',
            'quantite' => 'required',
            'montant'=> 'required'
        ]            
        ) ;
       
         $pv =  new livraison();
         $pv->id_Produit = $dataValidation['produits'];
         $pv->id_pv = 3;
         $pv->quantite = $dataValidation['quantite'];
         $pv->montant= $dataValidation['montant'];
         //dd($pv);
         $pv->save();

        return redirect()->route('vendeur.dashbord');
       
    }
}
