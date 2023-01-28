<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Hash;
use Auth;

class StudentController extends Controller
{
    public function registerStudent(Request $request) {
        $request->validate([
            'fullName'=>'required',
            'student_ID'=>'required|unique:students,student_ID',
            'gender'=>'required',
            'email'=>'required|email|unique:students,email',
            'password'=>'required|min:6|max:15',
            'password_confirmation'=>'required|same:password'
        ]);
        $student = new Student();
        $student->fullName = $request->fullName;
        $student->student_ID = $request->student_ID;
        $student->gender = $request->gender;
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
          return redirect()->back()->with('error', 'Login Failed, Please check password');
        }
        if(Auth::guard('student')->attempt($check)) {
            return redirect()->route('student.dashboard')->with('success', 'You are now succesfully Login!');
        }else {
            return redirect()->back()->with('error', 'Login Failed');
        }
    }
    //logout student
    public function logout() {
        Auth::guard('student')->logout();

        return redirect('/');
    }
}
