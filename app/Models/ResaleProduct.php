<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResaleProduct extends Model
{
    //
    protected $fillable = ['quantity_available','quantity_accounting','quantity_allocated',
    'size','material','color_id','additional_infor','product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function detail()
    {
        return $this->hasOne(ProductDetail::class);
    }
}
