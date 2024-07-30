<?php

namespace App\Http\Controllers;
use App\Models\Commantaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function avis(Request $request){
        $commantaire = new Commantaire();
        $commantaire ->artisan_id = $request->artisan_id ;
        $commantaire ->note = $request->note;
        $commantaire ->prenoms = $request->prenoms;
        $commantaire ->commantaire = $request->commentaire;
        $commantaire ->appreciation = $request->appreciation;
        $commantaire->save();

        return back();

    }
}
