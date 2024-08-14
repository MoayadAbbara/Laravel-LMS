<?php

use App\Http\Controllers\HomeController;
use App\Http\Middleware\RoleCheck;
use App\Models\Course;
use App\Models\Role;
use Doctrine\DBAL\Logging\Middleware;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('guest')->group(function () {
    Route::get('register', [AuthController::class, 'ShowRegisterForm'])->name('register.form');
    Route::post('register', [AuthController::class, 'Register'])->name('register');
    Route::get('login', [AuthController::class, 'ShowLoginForm'])->name('login.form');
    Route::post('login', [AuthController::class, 'Login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', [AuthController::class, 'Logout'])->name('logout');
    Route::get('course', [HomeController::class, 'CourseRedirect'])->name('course');
    Route::get('courses/{course}', [HomeController::class, 'CourseLessonRedirect'])->name('courseLesson');
});

Route::prefix('student')->middleware([Authenticate::class, RoleCheck::class . ':' . Role::STUDENT])->name('student.')->group(function () {
    Route::get('courses', [\App\Http\Controllers\Student\CourseController::class, 'index'])->name('courses');
    Route::get('courses/{course}', [\App\Http\Controllers\Student\CourseController::class, 'view'])->name('courses.view');
    Route::get('Program', [HomeController::class, 'WeeklyProgram'])->name('program');
});

Route::prefix('teacher')->middleware([Authenticate::class, RoleCheck::class . ':' . Role::TEACHER])->name('teacher.')->group(function () {
    Route::get('courses', [\App\Http\Controllers\Teacher\CourseController::class, 'index'])->name('courses');
    Route::get('courses/{course}', [\App\Http\Controllers\Teacher\CourseController::class, 'view'])->name('courses.view');

});


Route::get('/withtest', function () {
    dd(Course::with('lesson')->get());
});

Route::get('/bbb', function () {
    return view('tailwind', compact('lessons'));
});




// Route::get('/ini', function () {
//     phpinfo();
// });