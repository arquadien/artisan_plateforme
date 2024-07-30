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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('prix');
            $table->longText('presentation');
            $table->string('photos');
            $table->bigInteger('user_id')->unsigned(); // Changer pour unsigned integer
            $table->timestamps();

            // Clé étrangère vers la table 'users'
            $table->foreign('user_id')
                  ->references('id')->on('artisans')
                  ->onDelete('cascade'); // Suppression en cascade si l'utilisateur est supprimé
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
