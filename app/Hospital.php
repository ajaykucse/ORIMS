<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = "hospitals";

    public function scopeSearch($query, $s){
    	return $query->where('name','like','%' .$s. '%')
    	->orWhere('address','like','%' .$s. '%');
    }
}
