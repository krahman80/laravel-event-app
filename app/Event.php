<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = ['name', 'venue', 'start_time', 'end_time', 'organizer', 'city', 'description'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
