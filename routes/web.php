<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|-----------------------------v---------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|¨3*èDdjuddd$  45.021
$00ujuj
05"'!ù^}kiè$ù!j,!kUèu,?j;uh*/

//Route pour affichage des pages

Route::get('/', [AppController::class, 'index'])->name('accueil');

Route::post('/commentaire', [CommentaireController::class, 'avis'])->name('avis');

Route::get('/formulaire_de_demande_de_service', [AppController::class, 'service'])->name('formulaire_de_service');
Route::post('/formulaire_de_demande_de_service', [AppController::class, 'DemandeService'])->name('Demande_de_service'); 

Route::get('/liste_des_artisan', [AppController::class, 'liste'])->name('listedartisans');

Route::get('/abonnement', [AppController::class, 'abonnement'])->name('abonnement');
Route::get('/foire_au_question', [AppController::class, 'aide'])->name('plusdaide');
Route::get('/aide/telechargement/guide', [AppController::class, 'telechargement'])->name('guide.telechagement');

Route::get('/contact', [AppController::class, 'contact'])->name('contact');

Route::get('/plus_de_service', [AppController::class, 'plusService'])->name('plusService');

Route::get('/info_sur_nos_service/{id}', [AppController::class, 'infosurnosservice'])->name('infosurnosservice');

Route::get('/artisan/profil_recherche/{id}', [AppController::class, 'profil_recherche'])->name('profil_recherche');
Route::get('/artisan/profil/{id}', [AppController::class, 'showprofile'])->name('voir_profil');

Route::post('/recherche', [AppController::class, 'recherche'])->name('recherche');
Route::get('/artisan/profil/{id}', [AppController::class, 'showprofile'])->name('voir_profil');

Route::middleware(['guest'])->group(function () {//Route accessible seulement en etant déonnecter
     
    Route::get('/inscription', [AuthController::class, 'inscriptionForm'])->name('enregistrementForm');
    Route::post('/inscription', [AuthController::class, 'enregistrement'])->name('enregistrement'); 
    Route::get('/login', [AuthController::class, 'connexionForm'])->name('connexionForm');
    Route::post('/login', [AuthController::class, 'connexion'])->name('connexion'); 
});

// route pour la page de paiement
Route::get('/abonnement/systeme_de_paiement', [AppController::class, 'paiement'])->name('paiement');
 
//route sécurisé 
Route::middleware(['auth'])->group(function () {
    //Route liee à l'authentification
    Route::delete('/logout', [AuthController::class, 'Déconnexion'])->name('logout');
    Route::get('/profil', [AppController::class, 'profil'])->name('profil');

    //Route liee à aux article
    Route::post('/enregistrement_article',[ArticleController::class, 'create'])->name('creer_un_article');
    Route::get('/articles_publies',[ArticleController::class, 'show'])->name('affichage_article');
    //Route::put('/article/update/{id}',[ArticleController::class, 'update'])->name('mise_a_jour_article');

    //Route pour la modification des information
    Route::put('/mise_a_jour_des_informations',[AuthController::class, 'update'])->name('update');
});

    