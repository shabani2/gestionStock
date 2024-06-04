<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vendeurController extends Controller
{
    //formulaires

    public function entreForm(){
        return view('vendeur.Forms.entreForm');
    }
    public function caisse(){
        return view('Vendeur.Forms.venteForm');
    }

    //affichage
    public function dashbord(){
        return view('Vendeur.Pages.dashboard');
    }
    
    public function entre(){
        return view('Vendeur.Pages.entreProduit');
    }
    public function config(){
        return view('Vendeur.Pages.config');
    }
    public function caisseDisplay(){
        return view('Vendeur.Pages.vente');
    }
    public function solde(){
        return view('Vendeur.Pages.solde');
    }
    public function caisseOp(){
        return view('Vendeur.Pages.caisse');
    }
}
