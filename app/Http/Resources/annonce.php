<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class annonce extends JsonResource
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
            'Id_An'=>$this->Id_An,
            'Id_Uti'=>$this->Id_Uti,
            'Id_Cat_An'=>$this->Id_Cat_An,
            'Id_Mon'=>$this->Id_Mon,
            'Id_Img'=>$this->Id_Img,
            'Prix'=>$this->Prix,
            'Preciser'=>$this->Preciser,
            'Description'=>$this->Description,
            'Negociable'=>$this->Negociable,
            'Etat'=>$this->Etat,
            'Activated'=>$this->Activated,
            'paye'=>$this->paye,
            'livraison'=>$this->livraison,
            'Date_Ajout'=>$this->Date_Ajout,
            'Date_Update'=>$this->Date_Update


        ];
    }
    
}

