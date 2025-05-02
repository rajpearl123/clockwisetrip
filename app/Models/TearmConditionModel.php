<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TearmConditionModel extends Model
{
    use HasFactory;
    protected $table="tearm_conditions";
    protected $fillable = ['id','heading','content','created_at','updated_at']; 
    
}
