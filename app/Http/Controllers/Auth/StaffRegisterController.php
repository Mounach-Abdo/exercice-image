<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffRegisterController extends Controller
{
   /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct()
     {
         $this->middlware('guest:staff')->except('logout');
     }

     public function validator(Request $request)
     {
         return $request->validate([
             'first_name'=>'required|string',
             'last_name'=>'required|string',
            'email'=>'required|email|unique:staff,email'
         ]);
     }

     /**
      * 
      */

      public function register(Request $request)
      {
            self::$request->validator($request);
            $staff= Staff::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>hash::make($request->password),
            ]);

            auth::guard('staff')->login('staff');
      }
}
