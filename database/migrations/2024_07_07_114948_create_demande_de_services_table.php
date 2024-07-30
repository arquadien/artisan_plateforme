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
        Schema::create('demande_de_services', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenoms');
            $table->integer('phone');
            $table->bigInteger('metier_id')->unsigned(); // Changer en unsigned
            $table->string('ville');
            $table->string('commune');
            $table->string('quartier');
            $table->string('sexe');
            $table->longText('description');
            $table->timestamps();

            $table->foreign('metier_id')
              ->references('id')->on('metiers')
              ->onDelete('cascade'); // Suppression en cascade si le métier est supprimé
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_de_services');
    }
};
