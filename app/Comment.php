<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function blog(){
    	return $this->belongsTo('App\Blog');
    }

    public function User(){
    	return $this->belongsTo('App\User');
    }
}
