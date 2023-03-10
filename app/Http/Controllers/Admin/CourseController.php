<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function course() {
        $courses = Course::orderByDesc('created_at')->get();
        return view('Admin.Courses.course')->with('courses', $courses);

    }

    public function createCourse(){
        return view('Admin.Courses.createCourse');
    }

    public function addCourse(Request $request){
          //Validate
        $request->validate([
            'courseName'=>'required',
            'courseYearNumeric'=>'required',
            'section'=>'required',
        ]);
        $courses = new Course;
        $courses->courseName = $request->courseName;
        $courses->courseYearNumeric = $request->courseYearNumeric;
        $courses->section = $request->section;
        $courses->save();

        return redirect()->route('admin.course_list')->with('success', 'Course successfully added!');
    }


    public function editCourse($id){
        $course = Course::findorFail($id);
        return view('Admin.Courses.editCourse')->with('course', $course);
    }

    public function update(Request $request){
            //Validate
            $request->validate([
                'courseName'=>'required',
                'courseYearNumeric'=>'required',
                'section'=>'required',
            ]);

        $courses = Course::findorFail($request->id);
        $courses->courseName = $request->courseName;
        $courses->courseYearNumeric = $request->courseYearNumeric;
        $courses->section = $request->section;
        $courses->save();

        return redirect()->route('admin.course_list')->with('success', 'Course successfully updated!');
    }

    public function destroy($id){
        $course = Course::findorFail($id);
        $course->delete();

        return redirect()->route('admin.course_list')->with('success', 'Course successfully deleted!');
    }

}