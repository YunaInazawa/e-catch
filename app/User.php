<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'postal_code', 'street_addr', 'sex', 'birth_day', 'damin', 'icon'
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
    
    use SoftDeletes;

    // 子
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
    public function bads()
    {
        return $this->hasMany('App\Bad');
    }
    public function sends()
    {
        return $this->hasMany('App\Send');
    }
}
