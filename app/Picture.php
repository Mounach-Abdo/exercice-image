<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
   /* public function aticle()
    {
        return $this->belongsTo('App\Article');
    }

    public function employe()
    {
        return $this->belongsTo('App\Employe');
    }*/
    
  
<<<<<<< HEAD
    public static function store($request, $id, $type_image) 
=======
    public static function store($request, $id) 
>>>>>>> d39df792b03c54b45bf6f0dce9a762de2b157014
    {
        if($request->hasFile('img')){
            $file=$request->file('img')->store('pictures','public');
            $picture = new Picture();
            $picture->name= 'photo';
            $picture->extention=$request->img->extension();
            $picture->path = $file;
             // just article without morphing $picture->article_id=$id;
            $picture->pictureable_id=$id;
            $picture->pictureable_type=$type_image;
            $picture->save();
        }
       return $picture;
    }

    public function pictureable()
    {
        return $this->morphTo();
    }


}
