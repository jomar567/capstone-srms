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
}
