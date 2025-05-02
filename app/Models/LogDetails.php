<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDetails extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function adminDetails(){
        return $this->belongsTo(Admin::class,'user_id');
    }

    public function vendorDetails(){
        return $this->belongsTo(Vendor::class,'user_id');
    }
}
