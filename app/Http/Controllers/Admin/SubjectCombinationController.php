<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Course;
use App\Models\SubjectCombination;

class SubjectCombinationController extends Controller
{
    public function subjectCombined_list() {
      $subject_combinations = SubjectCombination::orderByDesc('created_at')->get();
      $subject = Subject::all();
      $course = Course::all();

      return view('Admin.Subjects.Subject_Combination.subjectCombination')->with('subject_combinations', $subject_combinations)
        ->with('subjects', $subject)
        ->with('courses', $course);
    }

    public function createSubjectCombination() {
      $subjects = Subject::all();
      $courses = Course::all();
      return view('Admin.Subjects.Subject_Combination.createSubjectCombination')->with('subjects', $subjects)
            ->with('courses', $courses);
    }
}
