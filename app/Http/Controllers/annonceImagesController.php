<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Resources\images as imgAnnonce;
use App\Http\Resources\annonces as annoncesRessource;
use App\Models\Images;
ini_set('max_execution_time', 300) ;
class annonceImagesController extends Controller
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
        ->orderBy('Date_Ajout','desc')->take(100)
        ->get();

        // $images = DB::table('tblimageannonce AS m')
        // ->join('tblimage as i', 'm.Id_Img', '=', 'i.Id_Img')
        // ->join('tblannonce as a', 'a.Id_An', '=', 'm.Id_An')
        // ->select('i.Url','a.Id_An')
        //   ->where('m.Id_An','1507656957')
        // ->where('a.activated',1)
        //  ->where('i.etat',1)
        //  ->orderBy('i.Date_Ajout','desc')->take(50)
        // ->get();
    
        // $users= (new ProfileResource(User::find(1)))->resolve();
        //   $groups=$images->groupBy('m.Id_Img');
           
        //  $results = [];
        // foreach($groups as $group) {
          
        //     $results['images']= head($group)->resolve();
           
        // }
    //   return $results;  
    //    $imaj=imgAnnonce::collection($images)->resolve() ;
            
        // $results=[];
        //  foreach($imaj as $img) {
        //     $results[]=$img;
        //     // return $results;
        // }

      
       


    
      $an=annoncesRessource::collection($annonce)->resolve();
      return  $an;
     //  return $an[0]['Id_An'];


    //  print_r($an);

    //  print_r($imaj[0]['url']);
    

    
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
