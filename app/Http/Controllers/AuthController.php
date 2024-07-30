<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Artisan;
use App\Models\Metier;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // Formulaire d''enregistrement d'un nouvel artisan
    public function inscriptionForm(){
        $metiers = Metier::all();
        return view('Auth.inscription', ['metiers' => $metiers]);
    }

    //Fonction  pour l'enregistrement d'un nouvel artisan
    public function enregistrement(Request $request)
    {     
       try
       {
            // Validation des données du formulaire
            $validatedData = $request->validate([
                'nom' => 'required|string',
                'prenoms' => 'required|string',
                'password' => 'required|string|min:4', //règle de validation pour le mot de passe
                'verification_mdp' => 'required|same:password',
                'phone' => 'required|string',
                'numero_whatsapp' => 'required|string',
                'metier_id' => 'required|exists:metiers,id', // Vérifie que metier_id existe dans la table metiers
                'annee_experience' => 'required|string',
                'ville' => 'required|string',
                'commune' => 'required|string',
                'quartier' => 'required|string',
                'sexe' => 'required|in:homme,femme',
                'latitude'=>'required',
                'longitude'=>'required',
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', //  validation pour l'upload de photo
            ]);

            // Gestion de l'upload de la photo
            $photoPath = $request->file('photo')->store('photos', 'public');

            // Création d'une nouvelle instance de l'artisan avec les données validées
            $artisan = new Artisan();
                $artisan->nom = $validatedData['nom'];
                $artisan->prenoms = $validatedData['prenoms'];
                $artisan->password = bcrypt($validatedData['password']); // Cryptage du mot de passe
                $artisan->phone = $validatedData['phone'];
                $artisan->numero_whatsapp = $validatedData['numero_whatsapp'];
                $artisan->metier_id = $validatedData['metier_id'];
                $artisan->annee_experience = $validatedData['annee_experience'];
                $artisan->ville = $validatedData['ville'];
                $artisan->commune = $validatedData['commune'];
                $artisan->quartier = $validatedData['quartier'];
                $artisan->sexe = $validatedData['sexe'];
                $artisan->longitude = $validatedData['longitude'];
                $artisan->latitude = $validatedData['latitude'];
                $artisan->photo = $photoPath; // Enregistre le chemin de la photo dans la base de données
                // Sauvegarde de l'artisan dans  la base de données
            $artisan->save();

            // Redirection avec un message de succès (vous pouvez personnaliser selon vos besoins)
            return redirect()->route('connexionForm')->with('msg', 'Inscription réussie !');

        }catch(ValidationException $e)
        {
            return back()->withErrors($e->errors())->withInput();
        }catch(Exception $e)
        {
            return back()->with('error', "une erreur est survenue lors de la tentative d'inscripion");
        }
    }

    //Formulaire de connexion
    public function connexionForm(){
        return view('Auth.Connecter');
    }

    // Fonction de déconnexion
    public function Déconnexion(){
        Auth::logout();
        return redirect(route('connexionForm'))->with('msg', 'Votre compte est à présent déconnecté !');
    }

    //Fonction pour la connexion
    public function connexion(Request $request){
        
        // Règles de validation pour la connexion d'un ûtilisateur
        $credentials = $request->validate([
            'phone' => ['required'],
            'password' => ['required'],
        ]);

        //verification des parametres et authentification de l'utilisayeur
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();;
            //dd(Auth::user()->photo);

            return redirect()->intended(route('profil'))->with('msg', 'Vous êtes connecté à votre compte!');
        }

        return redirect()->back()->with('erreur', 'Parametre de connexion incorret !')->onlyInput('phone');
    }

    //Fonction pour la mise à jour des informations de l'artisan
    public function update(Request $request){
       
        try
       {
        // Règle de validation des inputs 
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'phone' => 'required|string',
            'numero_whatsapp' => 'required|string',
            'ville' => 'required|string',
            'commune' => 'required|string',
            'quartier' => 'required|string',
        ]);

        // mise à jour de l'instance de l'artisan avec les données validées
        $artisan = Artisan::find(Auth::user()->id);
            $artisan->nom = $validatedData['nom'];
            $artisan->prenoms = $validatedData['prenoms'];
            $artisan->phone = $validatedData['phone'];
            $artisan->numero_whatsapp = $validatedData['numero_whatsapp'];
            $artisan->ville = $validatedData['ville'];
            $artisan->commune = $validatedData['commune'];
            $artisan->quartier = $validatedData['quartier'];
        
            // Vérifier si le mot de passe est modifié
            if ($request->has('new_password') && !empty($request->input('new_password'))) {

                if  (!Hash::check($request->last_password, $artisan->password)) {
                    return redirect()->route('profil')
                    ->with('msg_echec', "La mise à jour a échoué car l'ancien mot de passe saisi est incorrect.");
                }
            
                if ($request->new_password != $request->confirmation_mdp) {
                    return redirect()->route('profil')
                        ->with('msg_echec', "La mise à jour a échoué car le nouveau mot de passe saisi est différent du mot de passe pour la confirmation.");
                }

                $artisan->password = bcrypt($request->input('new_password'));
                
            }
            // Vérifier si la photo de profil est modifiée
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('photos', 'public');
                $artisan->photo = $photoPath; // si oui il est mis à jour
            }
            // Sauvegarde des nouvelles informations de l'artisan
        $artisan->update();

        return redirect()->route('profil')->with('msg', 'Vos informations ont bien été mise à jour');

       }catch(Exception $e){
        dd($e);
       }
    }
    


}
