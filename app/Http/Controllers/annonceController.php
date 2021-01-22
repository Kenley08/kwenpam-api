<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\annonce as ResourcesAnnonce;
use Illuminate\Database\Query\JoinClause;

class annonceController extends Controller
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
        ->orderBy('Date_Ajout','desc')->take(100)
        ->get();
     // return  $annonce->toJson();
      return  ResourcesAnnonce::collection($annonce);
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
     * @param  \App\Models\annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function show($annonce)
    {
        $ann = DB::table('tblannonce')
        ->join('tblcategorie', 'tblcategorie.Id_Cat_An', '=', 'tblannonce.Id_Cat_An')
        ->join('tblmonnaie', 'tblmonnaie.Id_Mon', '=', 'tblannonce.Id_Mon')
        ->join('tblimage', 'tblimage.Id_Img', '=', 'tblannonce.Id_Img')
        ->select('tblannonce.*', 'tblcategorie.Type_Cat', 'tblmonnaie.Monnaie','tblimage.Url')
        ->where('tblannonce.Id_An',$annonce)->get();

    

         // $ann->tojson();
         return ResourcesAnnonce::collection($ann);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, annonce $annonce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\annonce  $annonce
     * @return \Illuminate\Http\Response
     */
    public function destroy(annonce $annonce)
    {
        //
    }
}
