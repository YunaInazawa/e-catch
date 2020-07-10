<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Information extends Model
{
    use SoftDeletes;

    // 子
    public function sends()
    {
        return $this->hasMany('App\Send');
    }
}
