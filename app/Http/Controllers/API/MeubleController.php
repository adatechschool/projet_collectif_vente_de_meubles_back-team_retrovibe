<?php
/* MA PAGE CONTROLLER POUR MA TABLE MEUBLE.*/

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Meuble;
use Illuminate\Http\Request;

class MeubleController extends Controller
{
    /********** GET (globaux) **********/
    public function index()
    {
        $meubles = Meuble::all();

        // On retourne les informations des meubles en JSON.
        return response()->json($meubles);
    }

    /********** POST **********/
    public function store(Request $request)
    {
        // On crée un nouveau meuble
        $meuble = Meuble::create([
            'nom' => $request->nom,
            'année' => $request->année,
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

        // On retourne les informations du nouveau meuble en JSON.
        return response()->json($meuble, 201);
    }

    /********** GET (by one) **********/
    public function show(Meuble $meuble)
    {
        // On retourne les informations d'un meuble précis.
        return response()->json($meuble);
    }

    /********** PUT **********/
    public function update(Request $request, Meuble $meuble)
    {

        // On modifie les informations du meuble.
        $meuble->update([

            'type' => $request->type,
            'année' => $request->année,
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

        // On retourne la réponse JSON.
        return response()->json($meuble);
    }

    /********** DELETE **********/
    public function destroy(Meuble $meuble)
    {
        // On supprime le meuble.
        $meuble->delete();
        // On retourne la réponse JSON.
        return response()->json();
    }
}
