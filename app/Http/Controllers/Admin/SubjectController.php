<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    public function subjectlist() {
        $subjects = Subject::orderByDesc('created_at')->get();

        return view('Admin.Subjects.subject')->with('subjects', $subjects);
    }
    public function createsubject() {
        return view('Admin.Subjects.createSubject');
    }

    //Add New Subject Method
    public function adding(Request $request) {
        $subject = new Subject;
        $subject->subjectName = $request->subjectName;
        $subject->subjectCode = $request->subjectCode;
        $subject->save();
  
        return redirect()->route('admin.subject_list');
      }
  
}
