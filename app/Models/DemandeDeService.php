<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeDeService extends Model
{
    use HasFactory;

    protected $fillable= [
        'nom',
        'prenoms',
        'phone',
        'ville',
        'commune',
        'quartier',
        'sexe',
        'metier_id',
        'description'
    ];
}
