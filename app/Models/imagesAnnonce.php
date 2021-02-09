<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagesAnnonce extends Model
{
    use HasFactory;
    public $table = "tblimageannonce";
    protected $primaryKey = 'Id_Img_An';
    // public $fillable=['Id_Img_An'];
}
