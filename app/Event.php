<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Event extends Model
{
    //
    protected $fillable = ['name', 'venue', 'start_time', 'end_time', 'organizer', 'city', 'description'];

    protected $dates = ['start_time', 'end_time'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function users(){
        return $this->belongsToMany('app\User')->withTimeStamps();
    }

    public function getShortDescAttribute(){
        $length = 50;
        $append = "...";
        $string = $this->description;
        if(strlen($string) > $length) {
            $string = wordwrap($string, $length);
            $string = explode("\n", $string, 2);
            $string = $string[0] . $append;
          }
        
          return $string;
    }

    // public function getEventDateAttribute(){
    //     $string = Carbon::parse($this->start_time);
    //     return $string->format('F d, Y');
    // }
}
