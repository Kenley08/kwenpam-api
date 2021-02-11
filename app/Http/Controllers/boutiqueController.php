<?php

namespace App\Http\Controllers;

use App\Models\boutique;
use Illuminate\Http\Request;
use App\Http\Resources\boutique as Resourcesboutique;
use Illuminate\Support\Facades\DB;

class boutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annoncesBoutique=DB::table('tblboutique')
         ->join('tblannonceboutique','tblannonceboutique.Id_Bou','tblboutique.Id_bou')
            ->select('tblboutique.*')
        //  ->join('tblannonce','tblannonce.Id_An','tblannonceboutique.Id_An')
        //  ->join('tbltypeboutique','tbltypeboutique.Id_Type_Bou','tblboutique.Id_Type_Bou')
        //  ->join('tblimage','tblimage.Id_Img','tblboutique.Id_img')
        //  ->join('tbladresse','tbladresse.Id_adr','tblboutique.Id_Adr')
        // ->select('tblboutique.*','tbltypeboutique.Type_Bou','tblimage.Url','tbladresse.Adresse')
        // ->where('tblannonce.paye',1)
        // ->where('tblannonce.livraison',1)
        // ->orderBy('Date_Ajout','desc')->take(100)
        ->get();
         return Resourcesboutique::collection($annoncesBoutique);

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
     * @param  \App\Models\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function show($boutique)
    {
        $annonceBoutique=DB::table('tblboutique')->join('tbltypeboutique','tbltypeboutique.Id_Type_Bou','tblboutique.Id_Type_Bou')
        ->join('tblimage','tblimage.Id_Img','tblboutique.Id_img')
        ->join('tbladresse','tbladresse.Id_adr','tblboutique.Id_Adr')
        ->select('tblboutique.*','tbltypeboutique.Type_Bou','tblimage.Url','tbladresse.Adresse')
        ->where('tblboutique.Id_Bou',$boutique)
        ->get();
        return Resourcesboutique::collection($annonceBoutique);

        //return new Resourcesboutique($boutique);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, boutique $boutique)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\boutique  $boutique
     * @return \Illuminate\Http\Response
     */
    public function destroy(boutique $boutique)
    {
        //
    }
}
