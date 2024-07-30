<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'prix',
        'presentation',
        'photos',
        'user_id'
    ];

    public function artisan (){
        return $this->belongsTo(Artisan::class);
    }
}
