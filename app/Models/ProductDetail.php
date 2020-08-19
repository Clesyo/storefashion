<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    //
    protected $table = 'product_details';

    protected $fillable = ['size','material','color_id','resale_product_id','additional_infor'];
}
