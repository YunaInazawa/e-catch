<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bad extends Model
{
    use SoftDeletes;

    // 親
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function reason(){
        return $this->belongsTo('App\Reason');
    }
}
