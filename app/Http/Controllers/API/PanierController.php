<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Panier;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panier = Panier::all();

        return response()->json($panier);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dump('coucou');
        $panier = Panier::create([
            'id_utilisateur' => $request->id_utilisateur,
            'id_meuble' => $request->id_meuble
        ]);

        return response()->json($panier, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        return response()->json($panier);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Panier $panier)
    {
        $panier->update([
            
            /* On met à jour les champs "id_utilisateur" et "id_meuble" de la table "panier" 
            avec les valeurs contenues dans l'objet "Request".*/
            'id_utilisateur' => $request->id_utilisateur ?? $panier->id_utilisateur,
            'id_meuble' => $request->id_meuble ?? $panier->id_meuble
        ]);

        return response()->json($panier);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panier $panier)
    {
        $panier->delete();

        return response()->json();
    }
}

