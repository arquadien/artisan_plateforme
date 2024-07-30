<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Artisan extends Model implements Authenticatable
{
    use AuthenticableTrait;

    protected $fillable= [
        'nom',
        'prenoms',
        'password',
        'confirmation_mdp',
        'phone',
        'numero_whatsapp',
        'annee_experience',
        'ville',
        'commune',
        'quartier',
        'sexe',
        'metier_id',
        'photo'
    ];

    /**
     * Get the password for the user.
     *
     * @return string
     */


    public function metier (){
        return $this->belongsTo(Metier::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
