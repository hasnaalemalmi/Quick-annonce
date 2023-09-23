<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\Ville;
use App\Models\User;

class Annonce extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre', 
        'prix', 
        'telephone', 
        'description', 
        'photo_1', 
        'photo_2', 
        'photo_3', 
        'photo_4', 
        'photo_5',
        'ville_id',
        'categorie_id',
        'user_id',
        'etat'
    ];
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }


    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
