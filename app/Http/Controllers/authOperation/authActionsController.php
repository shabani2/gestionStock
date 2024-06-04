<?php

namespace App\Http\Controllers\authOperation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendeur;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;
class authActionsController extends Controller
{
    //
    //save vendeur action
    public function saveVendeur(Request $request){
        $validateData = $request->validate([
            'nom' => 'required|max:255',
            'postnom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'numero' => 'required|max:12|min:10',
            'password' => 'required|min:4',
            'image' => 'required',

        ]);
        
        $filename = "";
        if($request->hasFile('image')){
            $filename = $request->file('image')->store('vendeurs','public');
        }else{
            $filename = null;
        }
        $path = $filename;
       
        
        //dd($path);
        $vendeur = new vendeur();
        $vendeur->id_pointvente = $request->pv_id;
        $vendeur->nom = $validateData['nom'];
        $vendeur->postNom = $validateData['postnom'];
        $vendeur->prenom = $validateData['prenom'];
        $vendeur->numero = $validateData['numero'];
        $vendeur->password = Hash::make($validateData['password']);
         $vendeur->image = '';
       // dd($vendeur);
        $vendeur->save();
        

        return redirect()->route('test')->with('status', 'vendeur created');
       //return redirect('/vendeur/dashbord');
    }
    public function loginVendeur(Request $request){
        $credentials = $request->only('numero', 'password');
        //dd($credentials);
        if (Auth::guard('vendeur')->attempt($credentials)) {
            return redirect()->intended('/connexion/test');
        }
        return back()->withErrors([
            'numero' => 'The provided credentials do not match our records.',
        ]);
        

    }
    public function logout()
    {
        Auth::guard('vendeur')->logout();
        return redirect('/connexion/login');
    }

    // save admin

    public function loginAdmin(Request $request){
        
        $compte = $request->query('compte');
        return view('Auth.Login',compact('compte'));
    }
    public function saveAdmin(){
        return view('Auth.Register');
    }
}
