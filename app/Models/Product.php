<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['description','price','price_promotion','promotion',
    'brand_id','company_id','available','launch','showcase','status'];

    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function resale()
    {
        return $this->hasOne(ResaleProduct::class);
    }
}
