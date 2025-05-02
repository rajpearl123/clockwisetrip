<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table="likes";
    protected $fillable = ['id','user_id','category_id','property_id','is_status','created_at','updated_at']; 
    
}
