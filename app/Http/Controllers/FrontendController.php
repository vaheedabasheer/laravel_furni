<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
 public function home()
 {
    return view('front_end.index');
 }
 public function register()
 {
   return view('front_end.layouts.register');
 }
 public function save()
 {
  $name=request('name');
  $password=request('password');
  $email=request('email');
  $dob=request('dob');
  $phone=request('phone');
  $type=request('type');
   User::create([
                'name'=>$name,
                'password'=>$password,
                'email'=>$email,
                'dob'=>$dob,
                'phone'=>$phone,
                'type'=>$type
   ]);
   return view('front_end.layouts.register');
 }
 public function login()
 {
   return view('front_end.layouts.login');
 }
 public function dologin(Request $request)
{


        $credentials=$request->only('email','password','type');
        if(Auth::attempt($credentials))
        {
            // Authentication successful
            $type = $credentials['type'];
            if($type=='admin')
            {
               return redirect()->route('admin')->with('success','Welcome Admin....!');
            }
            elseif($type=='staff')
            {
               return redirect()->route('staff')->with('success','Start Working With Us...!');
            }
            else
            {
               return redirect()->route('customer')->with('success','Experience Our Service...!');
            }
           
        }
        else{
             // Authentication failed
            return redirect()->route('login')->with('message','Login Is Invalid');
        }
    }
    public function admin()
    {
      return view('front_end.admin.admin_index');
    }
    public function staff()
    {
           return view('front_end.staff_index');
    }
    public function customer()
    {
           return view('front_end.customer_index');
    }
    public function viewReg()
    {
      $users= User::all();
        return view('front_end.admin.view_registration',compact('users'));
    }
  

public function logout(Request $request)
{
    Auth::logout(); // Ends the user's auth session

    $request->session()->invalidate();       // Clears session data
    $request->session()->regenerateToken();  // Prevents CSRF token reuse

    return redirect()->route('login')->with('success', 'Logged out successfully!');
}


}
