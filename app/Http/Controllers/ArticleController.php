<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Article;
use App\Models\Article as ModelsArticle;
use App\Models\Artisan;

class ArticleController extends Controller
{

// renvoi la page index avec les posts
    public function create(Request $request)
    {
        //dd($request);
        try {
            $validation = $request->validate([
                'prix' => 'required|numeric',
                'presentation' => 'required',
                'photos' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'user_id' => 'required|exists:artisans,id|integer',
            ]);

            //dd($validation);
            try
            {
                $photoPath = $request->file('photos')->store('assets/image', 'public');
            
                $article = new ModelsArticle();
                $article->prix = $validation['prix'];
                $article->presentation = $validation['presentation'];
                $article->photos = $photoPath;
                $article->user_id = $validation['user_id'];

                $article->save();


               return redirect()->route('profil')->with('msg', 'Votre Article à bien été enregister avec success ');
                
            } catch (\Exception $e) {
                dd($e);
                // Gérer les exceptions qui peuvent survenir pendant le processus
                return redirect()->back()->withInput()->withErrors(['error' => $e->getMessage()]);
            }
      
            // Traitement des données validées
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Récupérer les données qui n'ont pas passé la validation
            $failedValidationData = $e->validator->failed();
            dd($failedValidationData );
            // Redirection ou autre gestion des erreurs
            return redirect()->back()->withErrors($e->validator)->withInput();
        }
        
      


        /*$val=1;
      
        $article = Article::with('user')->where('valideted',$val)->orderByDesc('updated_at')->paginate(6);

        return view('index',compact('post'));*/
    }

    
    public function show(){

        $articles = ModelsArticle::where('user_id',auth()->user()->id)->get();

        return view('article_publie', ['articles'=>$articles]);
    }

    
}

