<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name','parent','company_id','status'];

    public function parents() 
    {
        return $this->belongsTo(Category::class, 'parent','id'); //get parent category
    }

    public function childrens()
    {
        return $this->hasMany(Category::class,'parent','id')->with('childrens');
    }
}
