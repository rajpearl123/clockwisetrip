<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table="bookings";
    protected $guarded = []; 
    
    public function property()
    {
        return $this->belongsTo(Property::class, 'relative_table_id');
    }

    public function userDetail()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    

    
}
