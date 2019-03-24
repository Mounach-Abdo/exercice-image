<?php

namespace App\Http\Controllers;

use App\Employe;
use App\Role;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes=Employe::all();
        return view('employes.index',[
            'employes'=>$employes,
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('employes.create',[
            'roles'=>$roles
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employe=new Employe();
        $employe->first_name=$request->input('first_name');
        $employe->last_name=$request->input('last_name');
        $employe->save();
        $type_image='employes';
        $employe->roles()->sync($request->role);
        $picture = \App\Picture::store($request, $employe->id, $type_image);
        return redirect('employes/'.$employe->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show($employe_id)
    {
        $employe=Employe::findOrFail($employe_id);
        $employe->pictures;
        return view('employes.show',[
            'employe'=>$employe,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy($employe)
    {
        $employe=Employe::findOrFail($employe);
        $employe->delete();
        return redirect('employes/');
    }
    public function showtrash()
    {
        $employes=Employe::onlyTrashed()->get();
        return view('employes.trash',[
            'employes'=>$employes
        ]);
    }

    public function restore($id)
    {
        Employe::onlyTrashed()->find($id)->restore();
        return back();
    }
}
