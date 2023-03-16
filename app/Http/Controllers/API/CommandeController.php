<?php
/* VOICI NOTRE PREMIERE PAGE CONTROLLER, ici pour ma table Commande.
Elle va nous permettre de traiter les requêtes HTTP GET (globaux) / POST / GET(by one) / PUT / DELETE et 
retourner une réponse appropriée à l'utilisateur.*/

/* Cette ligne indique que la classe est dans le namespace "App\Http\Controllers\API". 
Cela signifie que la classe est accessible dans le dossier "API" de mon application Laravel.*/

namespace App\Http\Controllers\API;

/* Cette ligne indique que ce contrôleur étend la classe "Controller", 
qui est fournie par Laravel et contient plusieurs fonctionnalités utiles.*/

use App\Http\Controllers\Controller;

/* Ici, j'importe la classe "Commande" à partir de "App\Models\Commande". 
Cette classe représente le modèle Commande que nous avons créé dans app\Models.*/

use App\Models\Commande;

/* Ici, j'importe la classe "Request" à partir du namespace "Illuminate\Http". 
La classe Request est une classe Laravel qui représente une demande HTTP entrante, 
contenant des informations sur la demande et les données envoyées avec celle-ci. 
La classe Request est utilisée pour récupérer les données soumises via une demande HTTP et 
pour accéder aux informations sur la demande elle-même (comme l'URL, les en-têtes, les cookies, etc.).*/

use Illuminate\Http\Request;

/* Ici, je définis une classe de contrôleur nommée "CommandeController" qui étend la classe "Controller". 
Cette classe de contrôleur est une classe Laravel qui contient des méthodes qui sont appelées pour gérer les 
demandes HTTP entrantes. Les méthodes de la classe de contrôleur sont généralement appelées par les routes de 
l'application, qui redirigent les demandes HTTP vers la méthode appropriée en fonction de l'URL de la demande 
et de la méthode HTTP utilisée. La classe de contrôleur est utilisée pour regrouper la logique de gestion 
de plusieurs actions dans un seul endroit.*/

class CommandeController extends Controller
{
    /* Ici, je définis une fonction index pour traiter les GET globaux et qui va me renvoyer toutes les 
    commandes stockées dans la base de données sous forme de réponse JSON. Le mot-clé "public" signifie que cette 
    méthode peut être appelée à partir de n'importe où dans mon application.
     */
     
    /********** FONCTION pour traiter les GET (globaux).**********/

    public function index()
    {
        /* Je récupère toutes les commandes stockées dans la base de données à l'aide de la méthode statique "all()".
        Je stocke ces données dans ma variable $commande.*/

        $commande = Commande::all();

        // Je retourne les informations en JSON.
        return response()->json($commande);
    }

    /********** FONCTION pour traiter les POST.**********/

    // L'objet "Request" contient les données envoyées dans la requête HTTP.
    public function store(Request $request)     
    {
        // on utilise la méthode native create de Laravel pour insérer les données dans la BDD.
        $commande = Commande::create([
            'utilisateurs_id' => $request->utilisateurs_id,
            'meubles_id' => $request->meubles_id
        ]);

        return response()->json($commande, 201);
    }

    /********** FONCTION pour traiter les GET (by one).**********/

    public function show(Commande $commande)
    {
        return response()->json($commande);
    }

    /********** FONCTION pour traiter les PUT.**********/

    // L'objet "Request" passé 1er en paramètre contient les données envoyées dans la requête HTTP.
    // L'objet "Commande" passé en 2e paramètre représente la commande que nous souhaitons mettre à jour.
    public function update(Request $request, Commande $commande)
    {

        // On utilise la méthode native "update" de Laravel qui sert à mettre à jour les éléments dans la BDD.
        $commande->update([
            
            /* On met à jour les champs "utilisateurs_id" et "meubles_id" de la table "Commande" 
            avec les valeurs contenues dans l'objet "Request".*/
            'utilisateurs_id' => $request->utilisateurs_id,
            'meubles_id' => $request->meubles_id
        ]);

        return response()->json($commande);
    }
    

    /********** FONCTION pour traiter les DELETE.**********/

    // L'objet "Commande" passé en paramètre représente la commande que nous souhaitons supprimer de la BDD.
    public function destroy(Commande $commande)
    {
        // On utilise La méthode native "delete" de Laravel qui sert à supprimer un élément de la BDD.
        $commande->delete();

        return response()->json();
    }
}

// Ce sera le même principe pour mes deux autres pages Controller (Meuble et Utilisateur).
