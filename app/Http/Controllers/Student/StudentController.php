<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Hash;

class StudentController extends Controller
{
    public function registerStudent(Request $request) {
        $request->validate([
            'fullName'=>'required',
            'gender'=>'required',
            'email'=>'required|email|unique:students,email',
            'password'=>'required|min:6|max:15',
            'password_confirmation'=>'required|same:password'
        ]);
        $student = new Student();
        $student->fullName = $request->fullName;
        $student->gender = $request->gender;
        $student->email = $request->email;
        $student->password = Hash::make($request->password);
        $data = $student->save();
        if($data) {
            return redirect()->back()->with('success', 'You are now succesfully registered!');
        }else {
            return redirect()->back()->with('error', 'Registration Failed!');
        }
    }
}
