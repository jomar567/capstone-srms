<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Models\Course;
use App\Models\Student;


class MailController extends Controller
{
    public function email() {
      $courses = Course::all();

      return view('Admin.Email.sendEmail')->with('courses', $courses);
    }

    public function sendEmail(Request $request) {
      $course = Course::select('courseName', 'courseYearNumeric', 'section')
      ->where('id', $request->course_id)
      ->first();
      $courseName = $course->courseName;
      $courseYear = $course->coursYearNumeric;
      $section = $course->section;

      $studentsEmail = Student::select('students.email')
      ->join('courses', 'students.course_id', '=', 'courses.id')
      ->where('courses.id', $request->course_id)
      ->pluck('email')
      ->toArray();
      if(count($studentsEmail) > 0) {
        $mailData = [
          "courseName" => $courseName,
          "courseYear" => $courseYear,
          "section" => $section
        ];

        Mail::to($studentsEmail)->send(new Email($mailData));

        return redirect()->back()->with('success', 'Email sent successfully');
      } else {
        return redirect()->back()->with('error', 'No students were found');
      }
    }
}
