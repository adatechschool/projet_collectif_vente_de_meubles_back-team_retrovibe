<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| C'est ici que l'on enregistre nos routes API pour notre application.
|
*/

// pour chaque table, j'importe mon controller.

use App\Http\Controllers\API\CommandeController;   

// puis j'utilise la méthode Route::apiRessource() pour faire le lien entre ma table dans ma BDD et mon controller.

Route::apiResource("commandes", CommandeController::class);      // commandes.

// meubles.

use App\Http\Controllers\API\MeubleController;
Route::apiResource("meubles", MeubleController::class);

// utilisateurs.

use App\Http\Controllers\API\UtilisateurController;
Route::apiResource("utilisateurs", UtilisateurController::class);

// paniers.

use App\Http\Controllers\API\PanierController;
Route::apiResource("paniers", PanierController::class);
