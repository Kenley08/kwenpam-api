<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorieAnnonce extends Model
{
    use HasFactory;
    public $table = "tblcategorie_cr";
    protected $primaryKey = 'Id_Cat_An';
}
