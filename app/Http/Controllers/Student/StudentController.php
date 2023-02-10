<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Subject;
use App\Models\Result;
use Barryvdh\DomPDF\Facade\Pdf;
use Auth;

class StudentController extends Controller
{
    public function createPDF(){
        $students = Student::find(auth()->user()->id);
        $courses = Course::where('id', $students->course_id)->get();

        $data = [
            'students' => $students,
            'courses' => $courses,
        ];
        $pdf = PDF::loadView('Student.components.resultPDF', $data);

        return $pdf->stream('result.pdf');
    }

    public function resultDetails(Request  $request) {
      $students = Student::find(auth()->user()->id);
      $courses = Course::where('id', $students->course_id)->get();
      $results = Result::where('student_id', $students->id)->get();

      $totalScore = Result::where('student_id', $students->id)->count()*100;
      $sum = Result::where('student_id', $students->id)->sum('grades');
      $average = ($sum / $totalScore) * 100;
      $formatted_average = number_format($average, 1);
      // dd($sum);

      return view('Student.Result')->with('students', $students)
        ->with('courses', $courses)
        ->with('totalScore', $totalScore)
        ->with('sum', $sum)
        ->with('formatted_average', $formatted_average)
        ->with('results', $results);
    }
}
