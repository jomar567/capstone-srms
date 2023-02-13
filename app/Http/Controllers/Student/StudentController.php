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

//Created a separate class for getting the student result
class getResult {

  public static function resultDetails() {
    $students = Student::find(auth()->user()->id);
    $courses = Course::where('id', $students->course_id)->get();
    $results = Result::where('student_id', $students->id)->get();
    $totalScore = Result::where('student_id', $students->id)->count()*100;
    $sum = Result::where('student_id', $students->id)->sum('grades');
    if($totalScore && $sum > 0) {
      $average = ($sum / $totalScore) * 100;
    } else {
      $average = 0;
    }
    $formatted_average = number_format($average, 1);

    $data = [
      'students' => $students,
      'courses' => $courses,
      'results' => $results,
      'totalScore' => $totalScore,
      'sum' => $sum,
      'formatted_average' => $formatted_average,
    ];

    return $data;
  }

}

class StudentController extends Controller
{
    public function createPDF(Request $request){
      $data = getResult::resultDetails();

      $pdf = PDF::loadView('Student.components.resultPDF', $data);

      return $pdf->stream('result.pdf');
    }

    public function dashboardResult(Request $request) {
      $data = getResult::resultDetails();

      return view('Student.Dashboard', $data);
    }

    public function studentResult(Request $request) {
      $data = getResult::resultDetails();

      return view('Student.Result', $data);
    }

    public function profileInfo() {
      $data = getResult::resultDetails();
      return view('Student.Profile.Profile', $data);
    }

    public function editProfile($id){
      $students = Student::find(auth()->user()->id);
      $courses = Course::all();
      

      return view('Student.Profile.editProfile')->with('students', $students)
        ->with('courses', $courses);
   }

    public function updateProfile(Request $request){
      $students = Student::find(auth()->user()->id);
      $students->fullName = $request->fullName;
      $students->student_ID = $request->student_ID;
      $students->email = $request->email;
      $students->gender = $request->gender;
      $students->dob = $request->dob;
      $students->course_id = $request->course_id;
      $students->save();

      return redirect()->route('student.profile')->with('success', ' Profile successfully updated!');
    }

}