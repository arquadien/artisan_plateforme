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
    Schema::create('artisans', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('prenoms');
        $table->integer('phone')->unique();
        $table->string('password');
        $table->string('confirmation_mdp')->nullable();
        $table->integer('numero_whatsapp');
        $table->bigInteger('metier_id')->unsigned(); // Changer en unsigned
        $table->string('annee_experience')->nullable();
        $table->string('ville');
        $table->string('commune');
        $table->string('quartier');
        $table->string('sexe');
        $table->string('photo')->nullable();
        $table->decimal('latitude', 10, 8);
        $table->decimal('longitude', 11, 8);
        $table->rememberToken();
        $table->timestamps();

        // Clé étrangère vers la table 'metiers'
        $table->foreign('metier_id')
              ->references('id')->on('metiers')
              ->onDelete('cascade'); // Suppression en cascade si le métier est supprimé
    });
}

public function down(): void
{
    Schema::dropIfExists('artisans');
}
};
