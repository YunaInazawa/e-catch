<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use SoftDeletes;

    // 子
    public function stores()
    {
        return $this->hasMany('App\Store');
    }
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
