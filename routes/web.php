<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/meubles', function () {
//     $meubles =  DB::table('meubles')->get();
//     return $meubles;
// });

// Route::get('/meubles/{id}', function ($id) {
//     $meuble = DB::table('meubles')->where('id', $id)->first();
//     return $meuble;
// });

// Route::delete('/meubles/{id}', function ($id) {
//     $meuble = DB::table('meubles')->where('id', $id);
//     if ($meuble->exists()) {
//         $meuble->delete();
//         return response()->json(['message' => 'Meuble supprimé avec succès']);
//     } else {
//         return response()->json(['message' => 'Meuble introuvable'], 404);
//     }
// });




Route::get('/', function () {
    return view('welcome');
});

// Route::delete('/meubles/1', function () {
//     DB::table('meubles')->delete();
//     return response()->json(['message' => 'Le contenu de la table "meubles" a été supprimé.']);
// });

// Route::get('/meubles1', function () {
//     $results = DB::select('select * from meubles where id =?', array(1));
//     return $results;
// });
