<?php

use Illuminate\Support\Facades\Route;
// use App\Models\annonce;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

     // public $fillable=['Id_An','Id_Uti','Id_Cat_An','Id_Mon','Id_Img','Prix','quantite','preciser','Description','Negociable','Etat','Activated','paye','livraison','Date_Ajout','Date_Ajout'];

Route::get('/', function () {
    return view('welcome');
  
    // $annonces=annonce::All();
    // return  $annonces;

});




