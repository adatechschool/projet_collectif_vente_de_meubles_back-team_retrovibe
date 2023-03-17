<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* ici, je donne la structure de ma table pour pouvoir ensuite effectuer les modifications 
souhaitées via le code définit dans mes fonctions de mon fichier controller. (requêtes HTTP)*/

class Meuble extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'année',
        'type',
        'prix',
        'couleur_1',
        'couleur_2',
        'matiere_1',
        'matiere_2',
        'longueur',
        'largeur',
        'hauteur',
        'photo_1',
        'photo_2',
        'photo_3',
        'photo_4',
        'photo_5',
        'statut'
    ];
}
