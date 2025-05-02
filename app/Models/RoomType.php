<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    protected $table="room_type";
    protected $fillable = ['id','room_type','is_deleted','created_at','updated_at']; 
    
}
