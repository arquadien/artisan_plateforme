<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artisan;

class Metier extends Model
{
    use HasFactory;

    public function artisans (){
        return $this->hasMany(Artisan::class);
    }
}
