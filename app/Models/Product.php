<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['description','price','price_promotion','promotion',
    'brand_id','company_id','available','launch','showcase','status'];

    public function resales()
    {
        return $this->hasMany(ResaleProduct::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
