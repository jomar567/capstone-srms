<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Admin\AdminController;

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

      //Students route
      Route::view('/students_list', 'Admin.Students.student')->name('students_list');
      //Add student
      Route::view('/create_student', 'Admin.Students.createStudent')->name('create_student');
      //Edit student
      Route::view('/edit_student', 'Admin.Students.editStudent')->name('edit_student');

      //Class Route
      Route::view('/class_list', 'Admin.Classes.class')->name('class_list');
      //Add Class
      Route::view('/create_class', 'Admin.Classes.createClass')->name('create_class');
      // Edit Class
      Route::view('/edit_class', 'Admin.Classes.editClass')->name('edit_class');

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

      Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
