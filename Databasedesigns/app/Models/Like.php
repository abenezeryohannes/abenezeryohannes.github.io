<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    //answare picture
    public function answare(){
        return $this->belongsTo('App\Answare');
    }
    public function picture(){
        return $this->belongsTo('App\Picture');
    }
    public function profile(){
        return $this->belongsTo('App\Profile', 'liker_user_id', 'user_id');
    }
}
