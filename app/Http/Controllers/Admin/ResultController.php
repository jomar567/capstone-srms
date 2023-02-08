<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Course;
use App\Models\Student;
use App\Models\Result;

class ResultController extends Controller
{
    //Result List
    public function result_list() {
      $results = Result::orderByDesc('created_at')->get();
      $subject = Subject::all();
      $course = Course::all();
      $student = Student::all();

      // dd($subject);
      return view('Admin.Results.result')->with('results', $results)
        ->with('subjects', $subject)
        ->with('courses', $course)
        ->with('students', $student);
      }
}
