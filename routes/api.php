<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use App\Http\Controllers\API\MeubleController;

Route::apiResource("meubles", MeubleController::class);

use App\Http\Controllers\API\UtilisateurController;

Route::apiResource("utilisateurs", UtilisateurController::class);

use App\Http\Controllers\API\CommandeController;

Route::apiResource("commandes", CommandeController::class);
