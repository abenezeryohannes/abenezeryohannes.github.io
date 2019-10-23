<?php

namespace App;

//use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function answers()
    {
        return $this->hasMany('App\Answare');
    }

    public function pictures(){
        return $this->hasMany('App\Picture');
    }
    public function location(){
        return $this->hasOne('App\Location');
    }

    public function likers(){
        return $this->hasMany('App\Like', 'liked_user_id', 'id');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'facebook', 'email', 'password', 'first_name', 'last_name', 'instagram', 'phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
