<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','user_name','email', 'password','phone','photo','user_type','email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function donation()
    {
        return $this->hasMany('App\Donation');
    }
    public function campaign()
    {
        return $this->hasMany('App\Campaign');
    }
    public function comment()
    {
        return $this->hasMany('App\Comment');
    }


      public function bloodonar()
    {
        return $this->hasOne('App\Comment');
    }


}
