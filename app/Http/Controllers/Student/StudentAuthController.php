<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use Hash;
use Auth;

class StudentAuthController extends Controller
{
  public function registerForm() {
    $courses = Course::all();
    return view('auth.Student.register')->with('courses', $courses);
  }

  //Register New Student
  public function registerStudent(Request $request) {
    $request->validate([
        'fullName'=>'required',
        'student_ID'=>'required|unique:students,student_ID',
        'gender'=>'required',
        'dob'=>'required',
        'email'=>'required|email|unique:students,email',
        'password'=>'required|min:6|max:15',
        'password_confirmation'=>'required|same:password'
    ]);
    $student = new Student();
    $student->fullName = $request->fullName;
    $student->student_ID = $request->student_ID;
    $student->gender = $request->gender;
    $student->dob = $request->dob;
    $student->email = $request->email;
    $student->password = Hash::make($request->password);
    $data = $student->save();
    if($data) {
        return redirect()->route('student.login')->with('success', 'You are now succesfully registered!');
    }else {
        return redirect()->back()->with('error', 'Registration Failed!');
    }
  }

  //login student
  public function loginStudent(Request $request) {
      $student_ID = $request->input('student_ID');
      $password = $request->input('password');
      $student = Student::where('student_ID', '=', $student_ID)->first();

      $request->validate([
          'student_ID'=>'required|exists:students,student_ID',
          'password'=>'required|min:6|max:15'
      ], [
          'student_ID.exists' => "Student ID doesn't exist!"
      ]);
      $check = $request->only('student_ID','password');
      if (!Hash::check($password, $student->password)) {
        return redirect()->back()->with('error', 'Login failed, Please check your password');
      }
      if(Auth::guard('student')->attempt($check)) {
          return redirect()->route('student.dashboard')->with('success', 'You are now succesfully Login!');
      }else {
          return redirect()->back()->with('error', 'Login Failed');
      }
  }

  //Change Admin Password view form
  public function changePassword() {
    return view('Student.Settings.ChangePassword');
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
    Student::whereId(auth()->user()->id)->update([
      'password' => Hash::make($request->new_password)
    ]);

    return back()->with('success', 'Password changed successfully!');
  }
  //logout student
  public function logout() {
      Auth::guard('student')->logout();

      return redirect('/');
  }

}
