<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;
use App\Models\Boutique;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\annonce as ResourcesAnnonce;

class annonceBoutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($boutique)
    {
         //nou fe yon re4ket k ap vini ak tout kou ke elev sa ap suiv
         $annoncesBoutique=DB::table('tblannonceboutique')->join('tblannonce','tblannonce.Id_An','tblannonceboutique.Id_An')
          ->join('tblboutique','tblboutique.Id_Bou','tblannonceboutique.Id_bou')
         ->select('tblannonce.*')->where('tblannonceboutique.Id_bou',$boutique)->get();

         return ResourcesAnnonce::collection($annoncesBoutique);
        //return "yes...";
        
    
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
    public function show($boutique,$annonce)
    {
        //  $boutique=new Boutique;
        //  $annonce=new Annonce;
           //nou fe yon re4ket k ap vini ak tout kou ke elev sa ap suiv
           $annonceBoutique=DB::table('tblannonceboutique')
           ->join('tblannonce','tblannonce.Id_An','tblannonceboutique.Id_An')
           ->join('tblboutique','tblboutique.Id_Bou','tblannonceboutique.Id_bou')
          ->select('tblannonce.*')
           ->where('tblannonceboutique.Id_An',$annonce)
          ->where('tblannonceboutique.Id_bou',$boutique)->get();
 
          return $annonceBoutique->toJson(JSON_PRETTY_PRINT);
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
