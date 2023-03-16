<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* ici, je donne la structure de ma table pour pouvoir ensuite effectuer les modifications 
souhaitées via le code définit dans mes fonctions de mon fichier controller (requêtes HTTP).*/

class Commande extends Model
{
    use HasFactory;
    protected $fillable = [
        'utilisateurs_id',
        'meubles_id'
    ];
}
