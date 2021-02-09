<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class images extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
         
        return  'https://kwenpam.com/ressource/images/article/'.$this->Url;
          
        
    }
}
