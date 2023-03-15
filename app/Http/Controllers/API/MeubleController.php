<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Meuble;
use Illuminate\Http\Request;

class MeubleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meubles = Meuble::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($meubles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // On crée un nouveau meuble
        $meuble = Meuble::create([
            'nom' => $request->nom,
            'type' => $request->type,
            'prix' => $request->prix,
            'couleur_1' => $request->couleur_1,
            'couleur_2' => $request->couleur_2,
            'matiere_1' => $request->matiere_1,
            'matiere_2' => $request->matiere_2,
            'longueur' => $request->longueur,
            'largeur' => $request->largeur,
            'hauteur' => $request->hauteur,
            'photo_1' => $request->photo_1,
            'photo_2' => $request->photo_2,
            'photo_3' => $request->photo_3,
            'photo_4' => $request->photo_4,
            'photo_5' => $request->photo_5,
            'statut' => $request->statut
        ]);

        // On retourne les informations du nouvel utilisateur en JSON
        return response()->json($meuble, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Meuble $meuble)
    {
        return response()->json($meuble);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meuble $meuble)
    {

        // On modifie les informations de l'utilisateur
        $meuble->update([

            'type' => $request->type,
            'prix' => $request->prix,
            'couleur_1' => $request->couleur_1,
            'couleur_2' => $request->couleur_2,
            'matiere_1' => $request->matiere_1,
            'matiere_2' => $request->matiere_2,
            'longueur' => $request->longueur,
            'largeur' => $request->largeur,
            'hauteur' => $request->hauteur,
            'photo_1' => $request->photo_1,
            'photo_2' => $request->photo_2,
            'photo_3' => $request->photo_3,
            'photo_4' => $request->photo_4,
            'photo_5' => $request->photo_5,
            'statut' => $request->statut
        ]);

        // On retourne la réponse JSON
        return response()->json($meuble);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meuble $meuble)
    {
        $meuble->delete();
        return response()->json();
    }
}
