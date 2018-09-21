<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BloodBank extends Model
{
    protected $table = "bloodbanks";

    public function scopeSearch($query, $s){
    	return $query->where('name','like','%' .$s. '%')
    	->orWhere('address','like','%' .$s. '%');
    }

}
