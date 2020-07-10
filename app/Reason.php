<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reason extends Model
{
    use SoftDeletes;

    // 子
    public function bads()
    {
        return $this->hasMany('App\Bad');
    }
}
