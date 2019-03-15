<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function pictures()
    {
        # code...1
        return $this->hasMany('App\Picture');
    }
}
