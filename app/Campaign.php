<?php

namespace App;
use App\Category;


use Illuminate\Database\Eloquent\Model;


class Campaign extends Model
{	
	
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function donation(){
    	return $this->hasMany('App\Donation');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
