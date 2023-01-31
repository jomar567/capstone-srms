<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course() {
        return view('Admin.Courses.course');
    }

    public function createCourse(){
        return view('Admin.Courses.createCourse');
    }

    public function addCourse(Request $request){
        $courses = new Course;
        $courses->courseName = $request->courseName;
        $courses->courseYearNumeric = $request->courseYearNumeric;
        $courses->section = $request->section;
        $courses->save();

        return redirect()->route('admin.course_list');
    }


}
