<?php

namespace App;
use App\Campaign;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function campaign(){
    	return $this->hasMany('App\Campaign');
    }
}
