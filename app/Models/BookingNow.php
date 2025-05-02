<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingNow extends Model
{
    use HasFactory;
    protected $table="booking_now";
    protected $fillable = ['id','property_id','user_id','check_in_time','check_out_time','full_name','email_address','mobile_no','created_at','updated_at','adult','children','room']; 
    
}
