<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubjectCombination;
use App\Models\Subject;
use App\Models\Course;
use App\Models\Student;
use App\Models\Result;

class ResultController extends Controller
{
    //Result List
    public function result_list() {
      $results = Result::orderByDesc('created_at')->get();
      $results = $results->unique('student_id');
      $subject = Subject::all();
      $course = Course::all();
      $student = Student::all();

      return view('Admin.Results.result')->with('results', $results)
        ->with('subjects', $subject)
        ->with('courses', $course)
        ->with('students', $student);
    }

      //Create result form
    public function createResult() {
      $subject_combinations = SubjectCombination::all();
      $courses = Course::all();
      $students = Student::all();

      return view('Admin.Results.createResult')->with('subject_combinations', $subject_combinations)
      ->with('courses', $courses)
      ->with('students', $students);
    }

    public function searchStudent(Request $request) {
      $selectedItem = $request->input('student_id');
      $record = Result::where('student_id', $selectedItem)->first();

      if ($record) {
        return response()->json([
            'message' => 'Record already exists',
            'status' => 'error'
        ], 400);
      }
    }

    //Subject Combination Add
    public function addResult(Request $request) {


      $course = Course::find($request->course_id);
      foreach($course->combinedSubjects as $subject) {
        $results = new Result;
        $results->course_id = $request->course_id;
        $results->student_id = $request->student_id;
        $results->subject_id = $subject->subject_id;
        $results->grades = $request->input($request->course_id.$subject->subject_id);
        $results->save();
      }

      return redirect()->route('admin.result_list')->with('success', 'Successfully Added Result');
    }

    //Edit Method
    public function editResult(Request $request) {
      $results = Result::where('student_id', $request->student_id)->get();
      $student = Student::find($request->student_id);
      $course = $student->course;
      return view('Admin.Results.editResult')->with('results', $results)
        ->with('student', $student)
        ->with('course', $course);
    }

      //Update Result
      public function updateResult(Request $request) {
        $student = Student::find($request->student_id);
        $course = $student->course;
        foreach($course->combinedSubjects as $subject) {
          $result = Result::where('course_id', $course->id)
             ->where('student_id', $student->id)
             ->where('subject_id', $subject->subject_id)
             ->first();
          $result->grades = $request->input('grades_'.$subject->subject_id);
          $result->save();
        }
        return redirect()->route('admin.result_list')->with('success', 'Successfully Updated Result');
      }

      //Delete Student
      public function deleteResult(Request $request) {
        $student = Student::find($request->student_id);
        $result = Result::where('student_id', $student->id);
        $result->delete();

        return redirect()->route('admin.result_list')->with('success', 'Result Successfully Deleted');
      }
}
