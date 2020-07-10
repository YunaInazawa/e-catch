<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Send extends Model
{
    use SoftDeletes;

    public function information(){
        return $this->belongsTo('App\Information');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
