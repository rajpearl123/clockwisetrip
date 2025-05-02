<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyPolicyModel extends Model
{
    use HasFactory;
    protected $table="privacy_policy";
    protected $fillable = ['id','heading','content','created_at','updated_at']; 
    
}
