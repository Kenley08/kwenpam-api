<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    use HasFactory;
    public $table = "tblimage";
    protected $primaryKey = 'Id_Img';
    //public $fillable=['Id_An'];
}
