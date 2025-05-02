<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PropertyVisible extends Model
{
    use HasFactory;
    protected $table="property_visibles";
    protected $guarded = []; 


    

    public function adminDetail()
    {
        return $this->belongsTo(Admin::class, 'sender_id');
    }

    public function vendorDetail()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    
}
