<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commantaire extends Model
{
    use HasFactory;

    protected $fillable=[
        'artisan_id',
        'note',
        'appreciation',
        'prenoms',
        'commantaire'
    ];

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
