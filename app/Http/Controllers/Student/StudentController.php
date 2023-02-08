<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Subject;
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
}
