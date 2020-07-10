<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
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
