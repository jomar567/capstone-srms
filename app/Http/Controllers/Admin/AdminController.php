<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Hash;

class AdminController extends Controller
{
   //login admin
   public function loginAdmin(Request $request) {
    $username = $request->input('username');
    $password = $request->input('password');
    $admin = Admin::where('username', '=', $username)->first();

    $request->validate([
        'username'=>'required|exists:admins,username',
        'password'=>'required|min:6|max:15'
    ], [
        'username.exists' => 'Username is not registered!'
    ]);
    $check = $request->only('username','password');
    if (!Hash::check($password, $admin->password)) {
      return redirect()->back()->with('error', 'Login Failed, Please check password');
    }
    if(Auth::guard('admin')->attempt($check)) {
        return redirect()->route('admin.dashboard')->with('success', 'You are now succesfully Login!');
    }else {
        return redirect()->back()->with('error', 'Login Failed');
    }
    }
    //Logout Admin
    public function logout() {
        Auth::guard('admin')->logout();

        return redirect('/');
    }

    //Change Admin Password view form
    public function changePassword() {
      return view('Admin.Settings.ChangePassword');
    }

    //Update Password
    public function updatePassword(Request $request) {
      //Validate
      $request->validate([
        'oldPassword'=>'required|min:6|max:15',
        'new_password'=>'required|min:6|max:15|confirmed'
      ]);

      //Check if password match
      if(!Hash::check($request->oldPassword, auth()->user()->password)) {
        return back()->with('error', 'Old Password do not match!');
      }

      //Update the password
      Admin::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password)
      ]);

      return back()->with('success', 'Password changed successfully!');
    }
}
