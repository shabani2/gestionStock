<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('livraisons', function (Blueprint $table) {
            $table->id();
            $table->float('montant');
            $table->float('quantite');   
            $table->boolean('statut');           
            $table->unsignedBigInteger('id_Produit');
            $table->unsignedBigInteger('id_pv');
            $table->foreign('id_Produit')->references('id')->on('produits')->ondelete('cascade');
            $table->foreign('id_pv')->references('id')->on('point_ventes')->ondelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
