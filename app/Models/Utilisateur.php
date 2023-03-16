<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* ici, je donne la structure de ma table pour pouvoir ensuite effectuer les modifications 
souhaitées via le code définit dans mes fonctions de mon fichier controller. (requêtes HTTP)*/

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
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
