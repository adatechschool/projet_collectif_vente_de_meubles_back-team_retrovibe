<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'mot_de_passe',
        'telephone',
        'adresse',
        'code_postal',
        'ville'
    ];

    // protected $hidden = [
    //     'mot_de_passe',
    // ];
}
