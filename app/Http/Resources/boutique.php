<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
ini_set('max_execution_time', 300) ;
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
        $id_Bou=$this->Id_Bou;
        $annoncesBoutique=DB::table('tblannonceboutique')
         ->join('tblboutique','tblboutique.Id_Bou','tblannonceboutique.Id_bou')
        ->select('tblannonceboutique.Id_An')
        ->where('tblannonceboutique.Id_bou', $id_Bou)->get();
        $nb=$annoncesBoutique->count();

        // /////////////////////////////////////////////////////
        $nbAbonnees=DB::table('tblboutiqueabonne as a')
        ->join('tblboutique as b','b.Id_Bou','a.Id_Bou')
         ->join('tblutilisateur as u','u.Id_Uti','a.Id_Uti')
        ->select('a.*')
        ->where('a.Id_Bou',$id_Bou)
        ->where('a.Etat',1)
        ->get()->count();


        return[
            'Id_Bou'=>$this->Id_Bou,
            'Type_Boutique'=>$this->Type_Bou,
            'NomC'=>$this->NomC,
            'Nom_Bou'=>$this->Nom_Bou,
            'Id_Uti'=>$this->Id_Uti,
            'Url_Image'=>'https://kwenpam.com/ressource/images/profil/'.$this->Url,
            'Id_Img_Cou'=>$this->Id_Img_Cou,
            'Adresse'=>$this->Adresse,
            'Nbre_Annons'=>$nb,
            'Nbre_Abonnees'=>$nbAbonnees,
            'Etat'=>$this->Etat,
            'Date_Ajout'=>$this->Date_Ajout,
            'Date_Update'=>$this->Date_Update,


        ];

      
    }
}
