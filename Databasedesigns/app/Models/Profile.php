<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function answers()
    {
        return $this->hasMany('App\Answare', 'user_id', 'user_id');
    }
    //picture
    public function pictures(){
        return $this->hasMany('App\Picture', 'user_id', 'user_id');
    }
    //preference
    public function preference(){
        return $this->hasOne('App\Preference', 'user_id', 'user_id');
    }
    //location
    public function location(){
        return $this->hasOne('App\Location', 'user_id', 'user_id');
    }
    //user
    public function user(){
        return $this->belongsTo('App\User');
    }
}
