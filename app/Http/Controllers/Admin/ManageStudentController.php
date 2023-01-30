<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Hash;

class ManageStudentController extends Controller
{

    public function studentList() {
      $students = Student::orderByDesc('created_at')->get();

      return view('Admin.Students.student')->with('students', $students);
    }
    public function create() {
      return view('Admin.Students.createStudent');
    }

    //Add New Student Method
    public function store(Request $request) {
      $students = new Student;
      $students->fullName = $request->fullName;
      $students->student_ID = $request->student_ID;
      $students->email = $request->email;
      $students->gender = $request->gender;
      $students->dob = $request->dob;
      $students->password = Hash::make($request->password);
      $students->save();

      return redirect()->route('admin.students_list');
    }

    //Edit Method
    public function edit($id) {
      $student = Student::findorFail($id);

      return view('Admin.Students.editStudent')->with('student', $student);
    }
}
