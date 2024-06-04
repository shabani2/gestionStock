<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\vendeurController;
use App\Http\Controllers\admins\configController;
use App\Http\Controllers\authOperation\authActionsController;


Route::get('/', function () {
    return view('welcome');
});

//auth routes
Route::post('/con/store',[authActionsController::class,'saveVendeur'])->name('vendeur.save');
Route::post('/con/login',[authActionsController::class,'loginVendeur'])->name('vendeur.login');

Route::prefix('connexion')->group(function () {
        //post connexion actions 
    Route::get('/login', [authController::class,'login'])->name('login');
    Route::get('/register', [authController::class,'register'])->name('register'); 
    Route::get('/test', [authController::class,'test'])->name('test'); //->middleware('auth');    
   
    
});


// routes pour vendeur
Route::prefix('vendeur')->group(function () {
    //forms
    Route::get('/entre', [vendeurController::class,'entreForm'])->name('vendeur.entre');
    Route::get('/caisse', [vendeurController::class,'caisse'])->name('vendeur.caisse');

    //displays
    Route::get('/dashbord', [vendeurController::class,'dashbord'])->name('vendeur.dashbord');
    Route::get('/entre', [vendeurController::class,'entre'])->name('vendeur.entre');
    Route::get('/config', [vendeurController::class,'config'])->name('vendeur.config');
    Route::get('/vente', [vendeurController::class,'caisseDisplay'])->name('vendeur.vente');
    Route::get('/solde', [vendeurController::class,'solde'])->name('vendeur.solde');
    Route::get('/caisseOperation', [vendeurController::class,'caisseOp'])->name('vendeur.caisseOperation');
    
});

Route::prefix('config')->group(function () {
    //forms
    Route::get('/pointVente', [configController::class,'pointVenteForm'])->name('config.form.pv');
    Route::get('/categorie', [configController::class,'catForm'])->name('config.form.cat');
    Route::get('/produit', [configController::class,'ProduitForm'])->name('config.form.produit');
    Route::get('/livraison', [configController::class,'LivraisonForm'])->name('config.form.livraison');
    Route::get('/caisse', [vendeurController::class,'caisse'])->name('vendeur.caisse');

    //chargement produits dans select par categorie
    Route::get('/catProduit/{id}', [configController::class,'chargementProduit'])->name('config.form.chargementProduit');
   

    //config actions
    Route::post('/pointVente', [configController::class,'pointVenteSave'])->name('config.pv.save');
    Route::post('/livraison', [configController::class,'LivraisonSave'])->name('config.livraison.save');
    Route::post('/categorie', [configController::class,'categorieSave'])->name('config.cat.save');
    Route::post('/produit', [configController::class,'produitSave'])->name('config.produit.save');

   
    
});
