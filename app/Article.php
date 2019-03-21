<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Article extends Model
{
    use softDeletes;
    public function pictures()
    {
        # code...1
        return $this->morphMany('App\Picture' , 'pictureable');
    }
}
