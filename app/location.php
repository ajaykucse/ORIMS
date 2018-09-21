<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class location extends Model
{
   // protected $fillabel = ['country_code','country','city_region','zip'];

	public function scopeSearch($query, $s){
		return $query->where('country','like','%'.$s.'%')
		->orWhere('city_region','like','%'.$.'%');
	}
}
