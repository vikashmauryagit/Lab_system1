<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Adminlogin(Request $request)
    {
          $data=$request->validate([
            'email'=>'required',
            'password'=>'required',
          ]);
          if(Auth::attempt($data))
          {
              return redirect()->route('patient.create');
          }
          else
          {
            return redirect()->route('login')->with('status',"Please insert correct credential..");
          }
    }

    public function user()
    {
       return view('User.userRegister');
    }
    public function userRegister(Request $request)
    {

      $data=$request->validate([
        'name'=>'required',
        'email'=>'required',
        'username'=>'required',
        'password'=>'required'
      ]);
      $user=new User();
      $user->name=$request->name;
      $user->email=$request->email;
      $user->username=$request->username;
      $user->password=bcrypt($request->password);
      $user->save();
      

    }
}
