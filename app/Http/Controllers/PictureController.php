<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        
<<<<<<< HEAD

=======
        if($request->hasFile('img')){
            $file=$request->file('img')->store('pictures','public');
            $picture = new Picture();
            //$picture->name =$request->file('picture')->path;
            $picture->name= 'photo';
            $picture->extention=$request->img->extension();
            $picture->path = $file;
            $picture->article_id=$id;
            $picture->save();
        }
       
       return $picture;    
>>>>>>> d39df792b03c54b45bf6f0dce9a762de2b157014
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function show($picture)
    {
       /* $picture = Picture::findorfail($picture);
        return view('pictures.show', [ 'picture' => $picture]);
<<<<<<< HEAD

*/
=======
>>>>>>> d39df792b03c54b45bf6f0dce9a762de2b157014
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Picture  $picture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
