<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Store extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'login_id', 'password', 'email', 'postal_code', 'street_addr', 'TEL', 'rep_first_name', 'rep_last_name', 'permission', 'genre_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    use SoftDeletes;

    // 親
    public function genre(){
        return $this->belongsTo('App\Genre');
    }

    // 子
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
