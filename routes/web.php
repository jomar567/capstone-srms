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
use App\Http\Controllers\Admin\MailController;
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

Route::get('/', [NoticeController::class, 'notice'])->name('index');

Route::get('/notice/{id}', [NoticeController::class, 'noticeDetails'])->name('notice');

//Student Guest
Route::group([
  'prefix' => 'student',
  'middleware' => [
    'guest:student'
  ]
], function () {
  Route::get('/register', [StudentAuthController::class, 'registerForm'])->name('student.register');
  Route::view('/login', 'auth.Student.login')->name('student.login');
  Route::post('/registerStudent', [StudentAuthController::class, 'registerStudent'])->name('student.registerStudent');
  Route::post('/loginStudent', [StudentAuthController::class, 'loginStudent'])->name('student.loginStudent');
});

//Student Auth
Route::group([
  'prefix' => 'student',
  'middleware' => [
    'auth:student'
  ]
], function () {
  Route::get('/dashboard', [StudentController::class, 'dashboardResult'])->name('student.dashboard');
  Route::get('/view_result', [StudentController::class, 'studentResult'])->name('student.view_result');

  //Generate PDF
  Route::get('/generate_pdf', [StudentController::class, 'createPDF'])->name('student.generate_pdf');

  Route::get('/change_password', [StudentAuthController::class, 'changePassword'])->name('student.change_password');
  //Update Password
  Route::post('/update_password', [StudentAuthController::class, 'updatePassword'])->name('student.update_password');
  Route::post('/logout', [StudentAuthController::class, 'logout'])->name('student.logout');

  //Student Profile
  Route::get('/profile', [StudentController::class, 'profileInfo'])->name('student.profile');
  //edit profile
  Route::get('/edit_profile/{id}', [StudentController::class, 'editProfile'])->name('student.edit_profile');
  //update profile
  Route::post('/update_profile/{id}', [StudentController::class, 'updateProfile'])->name('student.update_profile');
});

//Admin Guest
Route::group([
  'prefix' => 'admin',
  'middleware' => [
    'guest:admin'
  ]
], function () {
  Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
  Route::post('/loginAdmin', [AdminController::class, 'loginAdmin'])->name('admin.loginAdmin');
});
//Admin Auth
Route::group([
  'prefix' => 'admin',
  'middleware' => [
    'auth:admin'
  ]
], function () {
  //Dashboard route
  Route::view('/dashboard', 'Admin.Dashboard')->name('dashboard');
  Route::get('/dashboard', [ManageStudentController::class, 'dashboardCount'])->name('admin.dashboard');

  //Students route
  Route::get('/students_list', [ManageStudentController::class, 'studentList'])->name('admin.students_list');
  //Add student Form
  Route::get('/create_studentForm', [ManageStudentController::class, 'create'])->name('admin.create_studentForm');
  //Add new Student
  Route::post('/addNewStudent', [ManageStudentController::class, 'store'])->name('admin.addNewStudent');
  //Edit student
  Route::get('/edit_student/{id}', [ManageStudentController::class, 'edit'])->name('admin.edit_student');
  //Update student
  Route::post('/update_student/{id}', [ManageStudentController::class, 'update'])->name('admin.update_student');
  //Delete student
  Route::post('/delete_student/{id}', [ManageStudentController::class, 'destroy'])->name('admin.delete_student');

  //Course Route
  Route::get('/course_list', [CourseController::class, 'course'])->name('admin.course_list');
  //Add Course
  Route::get('/create_courseForm', [CourseController::class, 'createCourse'])->name('admin.create_courseForm');
  // Edit Course
  Route::get('/edit_course/{id}',  [CourseController::class, 'editCourse'])->name('admin.edit_course');
  //Add course
  Route::post('/add_newCourse',  [CourseController::class, 'addCourse'])->name('admin.add_newCourse');
  // update course
  Route::post('/update_course/{id}',  [CourseController::class, 'update'])->name('admin.update_course');
  // delete course
  Route::post('/delete_course/{id}',  [CourseController::class, 'destroy'])->name('admin.delete_course');

  // Subject Route
  Route::get('/subject_list', [SubjectController::class, 'subjectlist'])->name('admin.subject_list');
  //Add Subject Form
  Route::get('/create_subject', [SubjectController::class, 'createsubject'])->name('admin.create_subject');
  //Add New Subject
  Route::post('/addNewSubject', [SubjectController::class, 'adding'])->name('admin.addNewSubject');
  // Edit Subject
  Route::get('/edit_subject/{id}', [SubjectController::class, 'editSubject'])->name('admin.edit_subject');
  //Update student
  Route::post('/update_subject/{id}', [SubjectController::class, 'updating'])->name('admin.update_subject');
  //Delete student
  Route::post('/delete_subject/{id}', [SubjectController::class, 'destroying'])->name('admin.delete_subject');

  // Result Route
  Route::get('/result_list', [ResultController::class, 'result_list'])->name('admin.result_list');
  //Create Result Form
  Route::get('/create_result', [ResultController::class, 'createResult'])->name('admin.create_result');
  //Add Result
  Route::post('/add_result', [ResultController::class, 'addResult'])->name('admin.add_result');
  //Search Student Data
  Route::post('/search_student', [ResultController::class, 'searchStudent'])->name('admin.search_student');
  //Edit Result
  Route::get('/edit_result/{student_id}', [ResultController::class, 'editResult'])->name('admin.edit_result');
  //Update Result
  Route::post('/update_result/{student_id}', [ResultController::class, 'updateResult'])->name('admin.update_result');
  //Update Result
  Route::post('/delete_result/{student_id}', [ResultController::class, 'deleteResult'])->name('admin.delete_result');

  // Notice Route
  Route::get('/notice_list', [NoticeController::class, 'display'])->name('admin.notice_list');
  //Add Noticeform
  Route::get('/create_noticeform', [NoticeController::class, 'createNotice'])->name('admin.create_noticeform');
  // add notice
  Route::post('/add_Notice', [NoticeController::class, 'addNotice'])->name('admin.add_Notice');
  //edit notice
  Route::get('/editNotice/{id}', [NoticeController::class, 'editnotice'])->name('admin.editNotice');
  //update notice
  Route::post('/update_notice/{id}', [NoticeController::class, 'updateNotice'])->name('admin.update_notice');
  //delete notice
  Route::post('/deleteNotice/{id}',  [NoticeController::class, 'destroynotice'])->name('admin.deleteNotice');

  //Subject Combination Routes
  Route::get('/subject_combination_list', [SubjectCombinationController::class, 'subjectCombined_list'])->name('admin.subject_combination_list');
  //Add Subject Combination Form
  Route::get('/create_subject_combination', [SubjectCombinationController::class, 'createSubjectCombination'])->name('admin.create_subject_combination');
  //Add New Subject Combination
  Route::post('/add_subject_combination', [SubjectCombinationController::class, 'addSubjectCombination'])->name('admin.add_subject_combination');
  //Edit New Subject Combination Form
  Route::get('/edit_subject_combination/{id}', [SubjectCombinationController::class, 'editSubjectCombination'])->name('admin.edit_subject_combination');
  //Edit New Subject Combination Form
  Route::post('/update_subject_combination/{id}', [SubjectCombinationController::class, 'updateSubjectCombination'])->name('admin.update_subject_combination');
  //Delete New Subject Combination Form
  Route::post('/delete_subject_combination/{id}', [SubjectCombinationController::class, 'deleteSubjectCombination'])->name('admin.delete_subject_combination');

  //Email Route
  Route::get('/email', [MailController::class, 'email'])->name('admin.email');
  Route::post('/sendEmail', [MailController::class, 'sendEmail'])->name('admin.sendEmail');

  //Change Password Route
  Route::get('/change_password', [AdminController::class, 'changePassword'])->name('admin.change_password');
  //Update Password
  Route::post('/update_password', [AdminController::class, 'updatePassword'])->name('admin.update_password');

  Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
