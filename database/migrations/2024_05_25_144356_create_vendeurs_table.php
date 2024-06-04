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
        // Schema::create('vendeurs', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nom');
        //     $table->string('postNom');
        //     $table->string('prenom');
        //     $table->string('numero');
        //     //$table->string('email');
        //     //$table->string('adresse');
        //     $table->string('password');
        //     $table->string('image');
        //     $table->unsignedBigInteger('id_pointvente');
        //     $table->foreign('id_pointvente')->references('id')->on('point_ventes')->ondelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendeurs');
    }
};
