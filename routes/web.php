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

Route::get('/meubles', function () {
    $meubles =  DB::table('meubles')->get();
    return $meubles;
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meubles1', function () {
    $results = DB::select('select * from meubles where id =?', array(1));
    return $results;
});
