<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    protected $fillable = ['name','document','birth','gender','email','telephone',
    'cell_phone','image_profile'];
}
