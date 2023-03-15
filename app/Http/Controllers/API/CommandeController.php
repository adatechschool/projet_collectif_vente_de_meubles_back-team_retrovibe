<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commande = Commande::all();

        // On retourne les informations des utilisateurs en JSON
        return response()->json($commande);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $commande = Commande::create([
            'utilisateurs_id' => $request->utilisateurs_id,
            'meubles_id' => $request->meubles_id
        ]);

        return response()->json($commande, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        return response()->json($commande);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commande $commande)
    {
        $commande->update([

            'utilisateurs_id' => $request->utilisateurs_id,
            'meubles_id' => $request->meubles_id
        ]);

        // On retourne la réponse JSON
        return response()->json($commande);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        $commande->delete();

        // On retourne la réponse JSON
        return response()->json();
    }
}
