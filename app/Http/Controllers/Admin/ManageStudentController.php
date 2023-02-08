<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Course;
use Hash;

class ManageStudentController extends Controller
{

    public function dashboardCount() {
      $students = Student::all();
      $subjects = Subject::all();
      $courses = Course::all();

      return view('Admin.Dashboard')->with('students', $students)
      ->with('subjects', $subjects)
      ->with('courses', $courses);
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

      return view('Admin.Students.editStudent')->with('student', $student);
    }

    //Update Student
    public function update(Request $request) {
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
