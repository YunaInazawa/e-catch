<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    use SoftDeletes;

    // 子
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
}
