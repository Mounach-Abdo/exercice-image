<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employe extends Model
{
    use softDeletes;
   
   public function picture()
   {
      return $this->morphOne('App\Picture' , 'pictureable');
     
   }
 
  
    public function roles()
    {
       return $this->belongsToMany('App\Role');
    }
    
    
  
}
