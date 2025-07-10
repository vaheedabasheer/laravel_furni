<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;


class AdminController extends Controller
{
   public function adminReg()
   {
    return view('front_end.admin.admin_registration');
   }
   public function save(Request $request)
 {
  $name=request('name');
  $password=request('password');
  $email=request('email');
  $dob=request('dob');
  $phone=request('phone');
  $type=request('type');
$request->validate([
                'name'=>'required|string|max:255',
                'password'=>'required|min:6',
                'email'=>'required|email|unique:admins',
                'dob'=>'required|date',
                'phone'=>'required|digits_between:10,15',
                'type'=>'required|string',

]);
   Admin::create([
                'name'=>$name,
                'password'=>$password,
                'email'=>$email,
                'dob'=>$dob,
                'phone'=>$phone,
                'type'=>$type
   ]);
   return view('front_end.admin.admin_registration');
 }
  public function login()
 {
 
   return view('front_end.admin.admin_login');
 }
 public function doAdminlogin(Request $request)
 {
    $credentials=$request->only('email','password');
   
  //  $email= $credentials['email'];
  //  $user=Admin::where('email',$email)->first();
  //  $type=$user->type;
  //  return $type;

    if(Auth::guard('admin')->attempt($credentials))
    {
        return redirect()->route('admin')->with('success','Welcome Admin....!');
    }
      else{
             // Authentication failed
            return redirect()->route('admin.login')->with('message','Login Is Invalid');
        }
 }
 
public function adminLogout(Request $request)
{
    Auth::logout(); // Ends the user's auth session

    $request->session()->invalidate();       // Clears session data
    $request->session()->regenerateToken();  // Prevents CSRF token reuse

    return redirect()->route('admin.login')->with('success', 'Logged out successfully!');
}

}
