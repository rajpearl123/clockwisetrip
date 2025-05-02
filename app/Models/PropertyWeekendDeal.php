<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class PropertyWeekendDeal extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="property_weekend_deal";
    protected $guarded = []; 
    protected $dates = ['deleted_at'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }
    
}
