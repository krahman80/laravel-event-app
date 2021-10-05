<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    //this is to pivot table
    public function attendedUser()
    {
        // return $this->belongsToMany('App\User')->withPivot("is_confirmed")->withTimestamps();
        return $this->belongsToMany('App\User');
    }
}
