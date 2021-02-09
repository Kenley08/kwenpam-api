<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\annonces as annoncesRessource;
use Illuminate\Support\Facades\DB;
ini_set('max_execution_time', 300) ;

class localAnnoncePaymentDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $annonce = DB::table('tblannonce')
        ->join('tblcategorie', 'tblcategorie.Id_Cat_An', '=', 'tblannonce.Id_Cat_An')
        ->join('tblmonnaie', 'tblmonnaie.Id_Mon', '=', 'tblannonce.Id_Mon')
        ->join('tblimage', 'tblimage.Id_Img', '=', 'tblannonce.Id_Img')
        ->select('tblannonce.*', 'tblcategorie.Type_Cat', 'tblmonnaie.Monnaie','tblimage.Url')
        ->where('tblannonce.paye',1)
         ->where('tblannonce.livraison',1)
         ->where('tblannonce.local',1)
        ->orderBy('Date_Ajout','desc')->take(100)
        ->get();
        
         $an=annoncesRessource::collection($annonce);
         return  $an;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
