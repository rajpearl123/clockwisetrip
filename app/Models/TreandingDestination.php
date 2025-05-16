<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TreandingDestination extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="treanding_destination";
    protected $fillable = ['id','property_id','is_deleted','created_at','updated_at']; 
    
}
