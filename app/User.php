<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
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
