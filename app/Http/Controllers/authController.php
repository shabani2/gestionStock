<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\point_vente;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //displays pages of connexion
    public function login(Request $request){
        $compte = $request->query('compte');
        return view('Auth.Login',compact('compte'));
    }
    public function register(){
        $pvs = point_vente::all();
        return view('Auth.Register',compact('pvs'));
    }
    public function test(){
        $vendeur = Auth::user();
        if ($vendeur === null) {
            return redirect('/connexion/login')->withErrors('You must be logged in to access this page.');
        }
        return view('Auth.testConnexion',compact('vendeur'));
    }
}
