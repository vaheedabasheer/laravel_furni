<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


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
                'email'=>'required|email|unique:users',
                'dob'=>'required|date',
                'phone'=>'required|min:10',
                'type'=>'required|string',

]);
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
          $email = $credentials['email'];

          // Find user by email
      $user = User::where('email', $email)->first();

      if ($user) {
             $rid = $user->rid;
            //  return $rid;
         session(['register_id' => $rid]);
                          } else {
                            echo "User not found.";
                                }
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
           return view('front_end.staff.staff_index');
    }
    public function customer()
    {
           return view('front_end.customer_index');
    }
    public function viewReg()
    {
      $users= User::paginate(5);
        return view('front_end.admin.view_registration',compact('users'));
    }
    public function edit()
    {

    }
    public function delete($rid)
    {
        User::find(decrypt($rid))->delete();
         return redirect()->route('admin.viewReg');
   
    }
    public function staffProfile()
  {

         $rid = session('register_id');
      $user=User::find($rid);
          return view('front_end.staff.profile',compact('user'));
  }  
      public function filecreate()
      {
        return view('front_end.staff.file_upload');
      }
    public function fileUpload()
    {
       $rid = session('register_id');
      if(request()->hasFile('image'))
    {
        $extension=request('image')->extension();
        $filename='user_pic'.time().'.'.$extension;

        request('image')->storeAs('images',$filename,'public');
        $input['image']=$filename;
        $address=request('address');
        File::create([
          'rid'=>$rid,
            'file'=>$filename,
            'address'=>$address,
        ]);
        return back()->with('success','Image Uploaded Successfully!');
    }
    }

public function viewMore()
{
   $data=DB::table('files')
  ->join('users','users.rid','=','files.rid')
  ->select('files.*','users.*')
  ->get();
  return view('front_end.staff.viewMore',compact('data'));
  return view('front_end.staff.viewMore');
}
public function viewMoreAdd()
{
 
}

public function logout(Request $request)
{
    Auth::logout(); // Ends the user's auth session

    $request->session()->invalidate();       // Clears session data
    $request->session()->regenerateToken();  // Prevents CSRF token reuse

    return redirect()->route('login')->with('success', 'Logged out successfully!');
}


}
