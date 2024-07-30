<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DB;
use App\Models\Article;
use App\Models\Artisan;
use App\Models\Commantaire;
use App\Models\DemandeDeService;
use App\Models\Metier;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    // ###########  fonction d'affichage des pages  ##################
    public function index (Request $request) {
        $metiers = Metier::take(4)->get();//afficher la page index avec 4 servive
        $searchs = Metier::all();
        $commentaires = Commantaire::all();
        return view('Acceuil', ['metiers' => $metiers, 'searchs' => $searchs, 'commentaires'=>$commentaires]);
    }

    public function recherche(Request $request)
    {
        $request->validate([
            'metier' => 'required|exists:metiers,id',
        ]);
    
        $metierId = $request->input('metier');
    
        $artisans = Artisan::where('metier_id', $metierId)->get();
    
        return view('resultat_recherche', compact('artisans'));
    }

    public function profil_recherche($id){
        // Récupérer l'artisan à partir de l'ID
        $artisan = Artisan::findOrFail($id);
        $metier = Metier::find($id);
        $commentaires = Commantaire::where('artisan_id',$id)->get();
        $compteur = $commentaires->count();
     
        $articles = Article::where('user_id',$id)->take(2)->get();

        // Passer l'artisan à la vue
        return view('profilrecherche', ['artisan' => $artisan,'metier'=> $metier, 'articles'=>$articles,
            'commentaires'=>$commentaires,
            'compteur'=>$compteur
        ]);
   
    }

        //renvoi la page  plus de service avec la liste de tous les service 
    public function plusService (){
        $metiers = Metier::all();//recupère  les information sur les metiers 
        return view('PlusDeService', ['metiers' => $metiers]);
    }

    public function infosurnosservice($id){
        $details = Metier::find($id);//recupère les information sur un metier précis 
        return view('infosurnosservice', ['details'=> $details]);
    }


    public function service (){
        $metiers = Metier::all();
        return view('Formulairedemandedeservice', ['metiers'=>$metiers]);
    }

    public function DemandeService(Request $request)
    {
        try {
            $data = $request->validate([
                'nom' => 'required|string',
                'prenoms' => 'required|string',
                'phone' => 'required|string',
                'metier_id' => 'required|exists:metiers,id',
                'ville' => 'required|string',
                'commune' => 'required|string',
                'quartier' => 'required|string',
                'longitude' => 'required',
                'latitude' => 'required',
                'description' => 'required|string',
                'sexe' => 'required|in:homme,femme',
            ]);
    
            // Création d'une nouvelle demande de service
            $demande = new DemandeDeService();
            $demande->nom = $data['nom'];
            $demande->prenoms = $data['prenoms'];
            $demande->phone = $data['phone'];
            $demande->metier_id = $data['metier_id'];
            $demande->ville = $data['ville'];
            $demande->commune = $data['commune'];
            $demande->quartier = $data['quartier'];
            $demande->description = $data['description'];
            $demande->sexe = $data['sexe'];
            $demande->save();

            //dd($data['metier_id']);
    
            // Récupération des coordonnées géographiques de l'utilisateur
            $userLatitude = $data['latitude'];
           $userLongitude = $data['longitude'];
           // $coordonees = [$data['latitude'], $data['longitude']];
            $rayon=1;
    
            // Requête pour récupérer les artisans les plus proches
            $liste = Artisan::select('*')
            ->selectRaw('
                6371 * acos(
                    cos( radians(latitude) ) *
                    cos( radians(?) ) *
                    cos( radians(longitude) - radians(?) ) +
                    sin( radians(latitude) ) *
                    sin( radians(?) )
                ) AS distance
            ', [$userLatitude, $userLongitude, $userLatitude])
            ->where('metier_id', $data['metier_id']) 
            ->orderBy('distance')
            ->get();

            // Déboguer pour vérifier les résultats
            //dd($liste);
    
            // Retourner la vue avec la liste des artisans
            return view('listedartisans', ['liste' => $liste]);
    
        } catch (Exception $e) {
            // Gérer les erreurs si elles surviennent
            dd($e);
        }
    }

    

    public function aide(){
        
        return view('pagedaide');
    }

    public function telechargement(){
        $guide= public_path('asset/Fichier/Guide.pdf');

        if (file_exists($guide)) {
            return response()->download($guide);
        }else{
            abort(404, "le fichier n'existe pas");
        }
        
    }



    public function contact (){
        return view('Contact');
    }

    public function abonnement (){
        return view('Abonnements');
    }

    public function profil (){
       $metier = Metier::find(Auth::user()->metier_id);
       $commentaires = Commantaire::where('artisan_id',auth()->user()->id)->get();
       $compteur = $commentaires->count();
       $articles = Article::where('user_id',auth()->user()->id)->take(2)->get();
      
        return view('profil', ['metier'=> $metier, 'articles'=>$articles, 'commentaires'=>$commentaires, 'compteur'=>$compteur]);
    }

    public function temoignage (){
        return view('temoignage');
    }

    public function showprofile($id)
    {
        // Récupérer l'artisan à partir de l'ID
        $artisan = Artisan::findOrFail($id);
        $metier = Metier::find($id);
        $commentaires = Commantaire::where('artisan_id',$id)->get();
        $compteur = $commentaires->count();
     
        $articles = Article::where('user_id',$id)->take(2)->get();

        // Passer l'artisan à la vue
        return view('artisan_profile', ['artisan' => $artisan,'metier'=> $metier, 'articles'=>$articles,
            'commentaires'=>$commentaires,
            'compteur'=>$compteur
        ]);
    }

    public function paiement(){
        return view('moyendepaiement');
    }


}
