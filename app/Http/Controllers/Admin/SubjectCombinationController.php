<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Course;
use App\Models\SubjectCombination;

class SubjectCombinationController extends Controller
{
    //Subject Combination List
    public function subjectCombined_list() {
      $subject_combinations = SubjectCombination::orderByDesc('created_at')->get();
      $subject = Subject::all();
      $course = Course::all();

      return view('Admin.Subjects.Subject_Combination.subjectCombination')->with('subject_combinations', $subject_combinations)
        ->with('subjects', $subject)
        ->with('courses', $course);
    }

    //Subject Combination Create
    public function createSubjectCombination() {
      $subjects = Subject::all();
      $courses = Course::all();
      return view('Admin.Subjects.Subject_Combination.createSubjectCombination')->with('subjects', $subjects)
            ->with('courses', $courses);
    }

    //Subject Combination Add
    public function addSubjectCombination(Request $request) {
      //Validate
      $request->validate([
        'subject_id'=>'required',
        'course_id'=>'required',
     ]);

      $subjectCombinations = new SubjectCombination;
      $subjectCombinations->subject_id = $request->subject_id;
      $subjectCombinations->course_id = $request->course_id;
      $subjectCombinations->save();

      return redirect()->route('admin.subject_combination_list')->with('success', 'Successfully Added Subject Combinations');
    }

    //Edit Subject Combination
    public function editSubjectCombination($id) {
      $subjectCombinations = SubjectCombination::findorFail($id);
      $subjects = Subject::all();
      $courses = Course::all();

      return view('Admin.Subjects.Subject_Combination.editSubjectCombination')->with('subjectCombinations', $subjectCombinations)
          ->with('courses', $courses)
          ->with('subjects', $subjects);
    }

    //Update Subject Combination
    public function updateSubjectCombination(Request $request) {
      $subjectCombinations = SubjectCombination::findorFail($request->id);
      $subjectCombinations->subject_id = $request->subject_id;
      $subjectCombinations->course_id = $request->course_id;
      $subjectCombinations->save();

      return redirect()->route('admin.subject_combination_list')->with('success', 'Successfully Updated Subject Combinations');
    }

    //Delete Subject Combination
    public function deleteSubjectCombination(Request $request) {
      $subjectCombinations = SubjectCombination::findorFail($request->id);
      $subjectCombinations->delete();

      return redirect()->route('admin.subject_combination_list')->with('success', 'Successfully Deleted Subject Combinations');
    }
}
