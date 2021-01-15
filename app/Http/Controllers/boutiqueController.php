<?php

namespace App\Http\Controllers;

use App\Models\boutique;
use Illuminate\Http\Request;
use App\Http\Resources\boutique as Resourcesboutique;

class boutiqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Resourcesboutique::collection(boutique::orderByDesc('Date_Ajout')->get());
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
    public function show(boutique $boutique)
    {
        return new Resourcesboutique($boutique);
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
