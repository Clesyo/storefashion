<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CredCard extends Model
{
    //
    protected $fillable = ['number_card','due_date','flag','client_id','status'];
}
