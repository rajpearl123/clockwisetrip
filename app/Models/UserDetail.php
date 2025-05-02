<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $table="user_details";
    protected $fillable = ['id','user_id','first_name','last_name','email'
    ,'mobile','user_name','password','country','state','city','Address','gender','dob'
    ,'profile_image','created_at','updated_at']; 
    
}
