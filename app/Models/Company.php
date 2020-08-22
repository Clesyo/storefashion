<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $fillable = ['name','document', 'email','telephone','cell_phon','whatsapp','cep',
    'andress','number','complement','neighborhood','city','state','instagram','facebook',
    'status','image','plan_id','user_id'];
}
