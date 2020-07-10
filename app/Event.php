<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    // 親
    public function genre(){
        return $this->belongsTo('App\Genre');
    }
    public function store(){
        return $this->belongsTo('App\Store');
    }
}
