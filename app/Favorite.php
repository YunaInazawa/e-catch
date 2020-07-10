<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Favorite extends Model
{
    use SoftDeletes;

    // 親
    public function type(){
        return $this->belongsTo('App\Type');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
