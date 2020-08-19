<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResaleProduct extends Model
{
    //
    protected $fillable = ['quantity_available','quantity_accounting','quantity_allocated',
    'date_last_exit','product_id'];
}
