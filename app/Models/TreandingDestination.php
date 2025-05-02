<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreandingDestination extends Model
{
    use HasFactory;
    protected $table="treanding_destination";
    protected $fillable = ['id','property_id','is_deleted','created_at','updated_at']; 
    
}
