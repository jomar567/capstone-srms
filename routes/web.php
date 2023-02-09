<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\StudentAuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ManageStudentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SubjectCombinationController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ResultController;
use Barryvdh\DomPDF\Facade\Pdf;
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
       // Route::view('/register', 'auth.Student.register')->name('register');
        Route::get('/register', [StudentAuthController::class, 'registerForm'])->name('register');
        Route::view('/login', 'auth.Student.login')->name('login');

        Route::post('/registerStudent', [StudentAuthController::class, 'registerStudent'])->name('registerStudent');
        Route::post('/loginStudent',[StudentAuthController::class, 'loginStudent'])->name('loginStudent');
    });
    Route::middleware(['auth:student'])->group(function () {
        Route::view('/dashboard', 'Student.Dashboard')->name('dashboard');
        Route::view('/view_result', 'Student.Result')->name('view_result');

        //Generate PDF
        Route::get('/generate_pdf', [StudentController::class, 'createPDF'])->name('generate_pdf');

        Route::get('/change_password', [StudentAuthController::class, 'changePassword'])->name('change_password');
        //Update Password
        Route::post('/update_password', [StudentAuthController::class, 'updatePassword'])->name('update_password');
        Route::post('/logout', [StudentAuthController::class, 'logout'])->name('logout');

        Route::view('/profile', 'Student.Profile')->name('profile');
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
      Route::get('/dashboard', [ManageStudentController::class, 'dashboardCount'])->name('dashboard');

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
      //Delete student
      Route::post('/delete_student/{id}', [ManageStudentController::class, 'destroy'])->name('delete_student');

      //Course Route
      Route::get('/course_list', [CourseController::class,'course'])->name('course_list');
      //Add Course
      Route::get('/create_courseForm', [CourseController::class,'createCourse'])->name('create_courseForm');
      // Edit Course
      Route::get('/edit_course/{id}',  [CourseController::class,'editCourse'])->name('edit_course');
      //Add course
      Route::post('/add_newCourse',  [CourseController::class,'addCourse'])->name('add_newCourse');
     // update course
      Route::post('/update_course/{id}',  [CourseController::class,'update'])->name('update_course');
      // delete course
      Route::post('/delete_course/{id}',  [CourseController::class,'destroy'])->name('delete_course');

      // Subject Route
      Route::get('/subject_list', [SubjectController::class, 'subjectlist'])->name('subject_list');
      //Add Subject Form
      Route::get('/create_subject', [SubjectController::class, 'createsubject'])->name('create_subject');
      //Add New Subject
      Route::post('/addNewSubject', [SubjectController::class, 'adding'])->name('addNewSubject');
      // Edit Subject
      Route::get('/edit_subject/{id}', [SubjectController::class, 'editSubject'] )->name('edit_subject');
      //Update student
      Route::post('/update_subject/{id}', [SubjectController::class, 'updating'])->name('update_subject');
      //Delete student
      Route::post('/delete_subject/{id}', [SubjectController::class, 'destroying'])->name('delete_subject');

      // Result Route
      Route::get('/result_list', [ResultController::class, 'result_list'])->name('result_list');
      //Create Result Form
      Route::get('/create_result', [ResultController::class, 'createResult'])->name('create_result');
      //Add Result
      Route::post('/add_result', [ResultController::class, 'addResult'])->name('add_result');
      //Search Student Data
      Route::post('/search_student', [ResultController::class, 'searchStudent'])->name('search_student');
      //Edit Result
      Route::get('/edit_result/{student_id}', [ResultController::class, 'editResult'])->name('edit_result');
      //Update Result
      Route::post('/update_result/{student_id}', [ResultController::class, 'updateResult'])->name('update_result');

      // Notice Route
      Route::get('/notice_list', [NoticeController::class, 'display'])->name('notice_list');
      //Add Noticeform
      Route::get('/create_noticeform', [NoticeController::class, 'createNotice'])->name('create_noticeform');
      // add notice
      Route::post('/add_Notice', [NoticeController::class, 'addNotice'])->name('add_Notice');
      //edit notice
      Route::get('/editNotice/{id}', [NoticeController::class, 'editnotice'])->name('editNotice');
      //update notice
      Route::post('/update_notice/{id}', [NoticeController::class, 'updateNotice'])->name('update_notice');
      //delete notice
      Route::post('/deleteNotice/{id}',  [NoticeController::class,'destroynotice'])->name('deleteNotice');

      //Subject Combination Routes
      Route::get('/subject_combination_list', [SubjectCombinationController::class, 'subjectCombined_list'])->name('subject_combination_list');
      //Add Subject Combination Form
      Route::get('/create_subject_combination', [SubjectCombinationController::class, 'createSubjectCombination'])->name('create_subject_combination');
      //Add New Subject Combination
      Route::post('/add_subject_combination', [SubjectCombinationController::class, 'addSubjectCombination'])->name('add_subject_combination');
      //Edit New Subject Combination Form
      Route::get('/edit_subject_combination/{id}', [SubjectCombinationController::class, 'editSubjectCombination'])->name('edit_subject_combination');
      //Edit New Subject Combination Form
      Route::post('/update_subject_combination/{id}', [SubjectCombinationController::class, 'updateSubjectCombination'])->name('update_subject_combination');
      //Delete New Subject Combination Form
      Route::post('/delete_subject_combination/{id}', [SubjectCombinationController::class, 'deleteSubjectCombination'])->name('delete_subject_combination');

      //Change Password Route
      Route::get('/change_password', [AdminController::class, 'changePassword'])->name('change_password');
      //Update Password
      Route::post('/update_password', [AdminController::class, 'updatePassword'])->name('update_password');

      Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


    });
});

