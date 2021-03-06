<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function events(){
        return $this->hasMany('App\Event');
    }

    //this for pivot table
    public function attendedEvent() 
    {
        return $this->belongsToMany('App\Event')->withPivot("is_confirmed")->as('user_pivot')->withTimestamps();
        // return $this->belongsToMany('App\Event');
    }
}
