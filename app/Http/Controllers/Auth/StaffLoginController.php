<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffLoginController extends Controller
{
    /*
     * 
     * 
     */

     public function validator(Request $request)
     {
         return $request->validate([
             'email'=>'required|exists:staff,email',
             'password'=>'required|string|min:6',
         ]);
     }
     /**
      * show the login form
      */

      public function showloginform()
      {
         return view('auth.staff.login');
      }

     /*
      * 
      * 
      */

      public function Login(Request $request)
      {
          self::validator($request);
          if(aurh::guard('staff')->attempt($request->only('email', 'password'),$request->remember))
          {
              return redirect();
          }
      }
}
