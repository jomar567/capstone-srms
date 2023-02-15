<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Course;
use App\Models\Result;
use Hash;

class ManageStudentController extends Controller
{

    public function dashboardCount() {
      $students = Student::all();
      $subjects = Subject::all();
      $courses = Course::all();
      $results = Result::all();
      $results = $results->unique('student_id');

      return view('Admin.Dashboard')->with('students', $students)
      ->with('subjects', $subjects)
      ->with('courses', $courses)
      ->with('results', $results);
    }

    public function studentList() {
      $students = Student::orderByDesc('created_at')->get();

      return view('Admin.Students.student')->with('students', $students);
    }
    public function create() {
      $courses = Course::all();

      return view('Admin.Students.createStudent')->with('courses', $courses);
    }

    //Add New Student Method
    public function store(Request $request) {
    //Validate
    $request->validate([
      'fullName'=>'required',
      'student_ID'=>'required|unique:students,student_ID',
      'email'=>'required|email|unique:students,email',
      'gender'=>'required',
      'dob'=>'required',
      'course_id'=>'required'
    ]);
      $students = new Student;
      $students->fullName = $request->fullName;
      $students->student_ID = $request->student_ID;
      $students->email = $request->email;
      $students->gender = $request->gender;
      $students->dob = $request->dob;
      $students->course_id = $request->course_id;
      $students->password = Hash::make($request->password);
      $students->save();

      return redirect()->route('admin.students_list')->with('success', 'Student Added Successfully ');
    }

    //Edit Method
    public function edit($id) {
      $student = Student::findorFail($id);
      $courses = Course::all();

      return view('Admin.Students.editStudent')->with('student', $student)
      ->with('courses', $courses);
    }

    //Update Student
    public function update(Request $request) {
      //Validate
    $request->validate([
      'fullName'=>'required',
      'student_ID'=>'required',
      'email'=>'required|email:students,email',
      'gender'=>'required',
      'dob'=>'required',
    ]);
      $students = Student::findorFail($request->id);
      $students->fullName = $request->fullName;
      $students->student_ID = $request->student_ID;
      $students->email = $request->email;
      $students->gender = $request->gender;
      $students->dob = $request->dob;
      $students->save();

      return redirect()->route('admin.students_list')->with('success', 'Student Updated Successfully ');;
    }

    //Delete Student
    public function destroy(Request $request) {
      $student = Student::findorFail($request->id);
      $student->delete();

      return redirect()->route('admin.students_list')->with('success', 'Student Deleted Successfully ');;
    }
}
