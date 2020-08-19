<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Andress extends Model
{
    //
    protected $fillable = ['cep','andress','number','complement','neighborhood','city',
    'state','main','client_id'];
}
