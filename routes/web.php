<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student\StudentController;


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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('student')->name('student.')->group(function() {
    Route::middleware(['guest'])->group(function () {
        Route::view('/register', 'auth.Student.register')->name('register');
        Route::view('/login', 'auth.Student.login')->name('login');

        Route::post('/registerStudent', [StudentController::class, 'registerStudent'])->name('registerStudent');
        Route::post('/loginStudent',[StudentController::class, 'loginStudent'])->name('loginStudent');
    });
    Route::middleware(['auth'])->group(function () {
        Route::view('/dashboard', 'Student.Dashboard')->name('dashboard');
        // Route::post('/logout', [StudentController::class, 'logout'])->name('logout');
    });
});
