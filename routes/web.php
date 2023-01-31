<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManageStudentController;
use App\Http\Controllers\Admin\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/notice', function () {
    return view('notice');
});


// Student Routes
Route::prefix('student')->name('student.')->group(function() {
    Route::middleware(['guest:student'])->group(function () {
        Route::view('/register', 'auth.Student.register')->name('register');
        Route::view('/login', 'auth.Student.login')->name('login');

        Route::post('/registerStudent', [StudentController::class, 'registerStudent'])->name('registerStudent');
        Route::post('/loginStudent',[StudentController::class, 'loginStudent'])->name('loginStudent');
    });
    Route::middleware(['auth:student'])->group(function () {
        Route::view('/dashboard', 'Student.Dashboard')->name('dashboard');
        Route::post('/logout', [StudentController::class, 'logout'])->name('logout');
    });
});

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::middleware(['guest:admin'])->group(function () {
        Route::view('/login', 'auth.Admin.login')->name('login');
        Route::post('/loginAdmin',[AdminController::class, 'loginAdmin'])->name('loginAdmin');
    });
    Route::middleware(['auth:admin'])->group(function () {
      //Dashboard route
      Route::view('/dashboard', 'Admin.Dashboard')->name('dashboard');
      Route::get('/dashboard', [ManageStudentController::class, 'studentCount'])->name('dashboard');

      //Students route
      Route::get('/students_list', [ManageStudentController::class, 'studentList'])->name('students_list');
      //Add student Form
      Route::get('/create_studentForm', [ManageStudentController::class, 'create'])->name('create_studentForm');
      //Add new Student
      Route::post('/addNewStudent', [ManageStudentController::class, 'store'])->name('addNewStudent');
      //Edit student
      Route::get('/edit_student/{id}', [ManageStudentController::class, 'edit'])->name('edit_student');
      //Update student
      Route::post('/update_student/{id}', [ManageStudentController::class, 'update'])->name('update_student');

      //Course Route
      Route::get('/course_list', [CourseController::class,'course'])->name('course_list');
      //Add Course
      Route::view('/create_course', 'Admin.Courses.createCourse')->name('create_course');
      // Edit Course
      Route::view('/edit_course', 'Admin.Courses.editCourse')->name('edit_course');

      // Subject Route
      Route::view('/subject_list', 'Admin.Subjects.subject')->name('subject_list');
      //Add Subject
      Route::view('/create_subject', 'Admin.Subjects.createSubject')->name('create_subject');
      // Edit Subject
      Route::view('/edit_subject', 'Admin.Subjects.editSubject')->name('edit_subject');

      // Subject Combination Route
      Route::view('/subject_combination_list', 'Admin.Subjects.Subject_Combination.subjectCombination')
            ->name('subject_combination_list');
      //Add Subject Combination
      Route::view('/create_subject_combination', 'Admin.Subjects.Subject_Combination.createSubjectCombination')
            ->name('create_subject_combination');
      // Edit Subject
      Route::view('/edit_subject_combination', 'Admin.Subjects.Subject_Combination.editSubjectCombination')
            ->name('edit_subject_combination');

      // Result Route
      Route::view('/result_list', 'Admin.Results.result')->name('result_list');
      //Add Result
      Route::view('/create_result', 'Admin.Results.createResult')->name('create_result');
      //Edit Result
      Route::view('/edit_result', 'Admin.Results.editResult')->name('edit_result');

      // Notice Route
      Route::view('/notice_list', 'Admin.Notices.notice')->name('notice_list');
      //Add Notice
      Route::view('/create_notice', 'Admin.Notices.createNotice')->name('create_notice');
      //Edit Notice
      Route::view('/edit_notice', 'Admin.Notices.editNotice')->name('edit_notice');

      Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
