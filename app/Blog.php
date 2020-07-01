<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
     public function comment(){
    	return $this->hasMany('App\Comment');
    }
}
