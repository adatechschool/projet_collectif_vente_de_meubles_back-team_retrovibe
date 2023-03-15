<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // On récupère tous les utilisateurs
        $utilisateur = Utilisateur::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($utilisateur);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|max:100',
            'email' => 'required|email|unique:utilisateurs',
            'mot_de_passe' => 'required|min:8'
        ]);

        // On crée un nouvel utilisateur
        $utilisateur = Utilisateur::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mot_de_passe' => bcrypt($request->mot_de_passe),
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'code_postal' => $request->code_postal,
            'ville' => $request->ville

        ]);

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($utilisateur, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Utilisateur $utilisateur)
    {
        // On retourne les informations de l'utilisateur en JSON
        return response()->json($utilisateur);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $this->validate($request, [
            'nom' => 'required|max:100',
            'email' => 'required|email|unique:utilisateurs',
            'mot_de_passe' => 'required|min:8'
        ]);

        // On modifie les informations de l'utilisateur
        $utilisateur->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'mot_de_passe' => bcrypt($request->mot_de_passe),
            'telephone' => $request->telephone,
            'adresse' => $request->adresse,
            'code_postal' => $request->code_postal,
            'ville' => $request->ville

        ]);

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($utilisateur);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Utilisateur $utilisateur)
    {
        // On supprime l'utilisateur
        $utilisateur->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
