<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class boutique extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'Id_Bou'=>$this->Id_Bou,
            'Type_Boutique'=>$this->Type_Bou,
            'NomC'=>$this->NomC,
            'Nom_Bou'=>$this->Nom_Bou,
            'Id_Uti'=>$this->Id_Uti,
            'Url_Image'=>'https://kwenpam.com/ressource/images/profil/'.$this->Url,
            'Id_Img_Cou'=>$this->Id_Img_Cou,
            'Adresse'=>$this->Adresse,
            'Etat'=>$this->Etat,
            'Date_Ajout'=>$this->Date_Ajout,
            'Date_Update'=>$this->Date_Update


        ];

      
    }
}
