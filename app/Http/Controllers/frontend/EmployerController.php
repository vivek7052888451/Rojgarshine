<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class EmployerController extends Controller
{
     public function employerLoginForm()
        {
           return view('employer-login');
        }

      public function employerAccount()
        {
            return view('employer-account');
        }

     public function login(Request $request)
    {
        
      $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
    $user = User::where('email',$request->email)->where('role_id',2)->get();
    if($user->isEmpty())
    {
      // dd('empty');
      return redirect('employer-login')->with('message', 'Record Not Found!');
    }
    else
    {
      if ($user[0]['password']) {
             if (Hash::check($request->password, $user[0]['password'])) {
               
                     $credentials = $request->only('email', 'password');
                             if (Auth::attempt($credentials)) {
                                 return redirect()->intended('admin')
                                    ->withSuccess('Signed in');
                             }
                             else
                             {
                              // dd('Login details are not valid');
                              return redirect("employer-login")->withSuccess('Login details are not valid');
                             }
                }
                else
                {
                   return redirect('employer-login')->with('message', 'Password Not Match');
                  // dd('password not Match');
                }
        }
        else {
            return redirect('employer-login')->with('message', 'Failed! Password Not Found');
            // return back()->with('failed', 'Failed! Password Not Found');
        }
      }
     
    }
}
