<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AnnonceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('boutique.annonce','annonceBoutiqueController');
Route::apiResource('annonce/categorie','annonceCategorieController');

Route::middleware('auth:api')->group(function(){
    Route::apiResource('annonce','annonceController');
    Route::apiResource('boutique','boutiqueController');
    // Route::apiResource('boutique.annonce','annonceBoutiqueController');

});


