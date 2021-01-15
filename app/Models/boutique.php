<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boutique extends Model
{
    use HasFactory;
    public $table = "tblboutique";
    protected $primaryKey = 'Id_Bou';
   // public $fillable=['Id_Bou'];
}
