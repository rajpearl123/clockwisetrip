<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmBooking extends Model
{
    use HasFactory;
    protected $table="orders";
    protected $fillable = ['id','order_id','email','mobile_no','amount','user_id','property_id','payment_method','created_at','updated_at']; 
    
}
