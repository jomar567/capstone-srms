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
    //logout student
    public function logout() {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
