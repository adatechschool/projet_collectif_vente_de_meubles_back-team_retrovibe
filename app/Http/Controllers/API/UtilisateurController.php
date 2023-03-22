<?php
/* MA PAGE CONTROLLER POUR MA TABLE UTILISATEUR.*/


namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /********** GET (globaux) **********/
    public function index()
    {
        // On récupère tous les utilisateurs
        $utilisateur = Utilisateur::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($utilisateur)->header('Access-Control-Allow-Origin', '*');
    }

    /********** POST **********/
    public function store(Request $request)
    {
        // pour la création, on exige que ces trois infos soient obligatoirement remplies. (nom, email, mdp) 
        $this->validate($request, [
            'nom' => 'required|max:100',    // 100 caractères maximum.
            'email' => 'required|email|unique:utilisateurs',       // le mail est unique pour chaque utilisateur.
            'mot_de_passe' => 'required|min:8'      // 8 caractères minimum pour le mdp.
        ]);

        // On crée un nouvel utilisateur.
        $utilisateur = Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            // le mot de passe est crypté avant son insertion dans la BDD.
            'mot_de_passe' => bcrypt($request->mot_de_passe),
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'code_postal' => $request->code_postal,
            'ville' => $request->ville

        ]);

        // On retourne les informations du nouvel utilisateur en JSON.
        return response()->json($utilisateur, 201)->header('Access-Control-Allow-Origin', '*');
    }

    /********** GET (by one) **********/
    public function show(Utilisateur $utilisateur)
    {
        // On retourne les informations d'un utilisateur précis en JSON.
        return response()->json($utilisateur)->header('Access-Control-Allow-Origin', '*');
    }

    /********** PUT **********/
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $this->validate($request, [
            'nom' => 'max:100',
            'email' => 'email|unique:utilisateurs',
            'mot_de_passe' => 'min:8'
        ]);

        // On modifie les informations de l'utilisateur
        $utilisateur->update([
            'nom' => $request->nom ?? $utilisateur->nom,
            'prenom' => $request->prenom ?? $utilisateur->prenom,
            'email' => $request->email ?? $utilisateur->email,
            'mot_de_passe' => bcrypt($request->mot_de_passe),
            'telephone' => $request->telephone ?? $utilisateur->telephone,
            'adresse' => $request->adresse ?? $utilisateur->adresse,
            'code_postal' => $request->code_postal ?? $utilisateur->code_postal,
            'ville' => $request->ville ?? $utilisateur->ville
        ]);

        // On retourne les informations du nouvel utilisateur en JSON.
        return response()->json($utilisateur)->header('Access-Control-Allow-Origin', '*');
    }

    /********** DELETE **********/
    public function destroy(Utilisateur $utilisateur)
    {
        // On supprime l'utilisateur.
        $utilisateur->delete();

        // On retourne la réponse JSON.
        return response()->json()->header('Access-Control-Allow-Origin', '*');
    }    
}