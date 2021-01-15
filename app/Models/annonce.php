<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;
    public $table = "tblannonce";
    protected $primaryKey = 'Id_An';
    public $fillable=['Id_An'];
}
