<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxRate extends Model
{
    use HasFactory;
    protected $table="tax_and_rate";
    protected $fillable = ['id','category_id','property_id','tax','rate_pr_night','is_deleted','created_at','updated_at']; 
    
}
