<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="propertys";
    protected $dates = ['deleted_at'];
    protected $guarded = []; 


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function countryDetail()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function stateDetail()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function cityDetail()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function vendorDetail()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id');
    }

    
}
