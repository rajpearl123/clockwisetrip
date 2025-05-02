<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsModel extends Model
{
    use HasFactory;
    protected $table="about_us";
    protected $fillable = ['id','title','subtitle','description','image','created_at','updated_at']; 
    
}
