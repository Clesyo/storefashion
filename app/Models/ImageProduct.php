<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    //
    protected $table = 'image_products';

    protected $fillable = ['path','resale_products_id'];

    public function resale_product()
    {
        return $this->belongsTo(ResaleProduct::class);
    }
}
