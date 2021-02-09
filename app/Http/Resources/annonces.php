<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\imagess as imagessAnnonce;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\images as imgAnnonce;

class annonces extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    
    public function toArray($request)
    {
        $id=$this->Id_An;

        ////////////////////////////////////////////////////
         $images = DB::table('tblimage AS i')
        ->join('tblimageannonce as m', 'm.Id_Img', '=', 'i.Id_Img')
        ->join('tblannonce as a', 'a.Id_An', '=', 'm.Id_An')
        ->select('i.Url')
          ->where('m.Id_An',$id)
        ->where('a.activated',1)
         ->where('i.etat',1)
         ->orderBy('i.Date_Ajout','desc')->take(50)
        ->get();
      

       $imaj=imgAnnonce::collection($images)->resolve();  
       
      
      
        return[
        
            'Id_An'=>$this->Id_An,
            'Id_Uti'=>$this->Id_Uti,
             'Monnaie'=>$this->Monnaie,
            'Categorie'=>$this->Type_Cat,
            'Url_Image'=>$imaj,
            'Prix'=>$this->Prix,
            'Quantite'=>$this->quantite,
            'Preciser'=>$this->Preciser,
            'Description'=>$this->Description,
            'Negociable'=>$this->Negociable,
            'Etat'=>$this->Etat,
            'Activated'=>$this->Activated,
            'Local'=>$this->local,
            'paye'=>$this->paye,
            'livraison'=>$this->livraison,
            'Date_Ajout'=>$this->Date_Ajout,
            'Date_Update'=>$this->Date_Update
        ];

      

        

     

    }
}
