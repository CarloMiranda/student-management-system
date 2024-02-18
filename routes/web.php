<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
});

Route::resource('/view', DashboardController::class)->names('view');

Route::resource('/students', StudentController::class)->names('students');

Route::resource('/teachers', TeacherController::class)->names('teachers');

Route::resource('/courses', CourseController::class)->names('course');

Route::resource('/batches', BatchController::class)->names('batches');

Route::resource('/enrollments', EnrollmentController::class)->names('enrollment');

Route::resource('/payments', PaymentController::class)->names('payments');

Route::get('report/report1/{pid}', [ReportController::class,'report1']);