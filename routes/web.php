<?php

use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseTeacherController;
use Illuminate\Support\Facades\Route;
use App\Models\Area;
use App\Models\Computer;
use App\Models\Teacher;

use App\Http\Controllers\OrmController;
use App\Http\Controllers\TeacherController;
<<<<<<< HEAD
=======
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\CourseTeacherController;
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4

Route::get('/', function(){
    return view('bienvenido');
});
<<<<<<< HEAD
Route::get('ormconsultas',[OrmController::class,'consultas']);
Route::get('/apprentice',[ApprenticeController::class,'index']);
Route::get('/area',[AreaController::class,'index']);
Route::get('/computer',[ComputerController::class,'index']);
Route::get('/course',[CourseController::class,'index']);
Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/Training-center',[TrainingCenterController::class,'index']);
Route::get('/courses_teachers',[CourseTeacherController::class,'index']);
=======

Route::get('teacher', [TeacherController::class, 'index']);
Route::get('course', [CourseController::class, 'index']);
Route::get('apprentice', [ApprenticeController::class, 'index']);
Route::get('area', [AreaController::class, 'index']);
Route::get('computer', [ComputerController::class, 'index']);
Route::get('training_center', [TrainingCenterController::class, 'index']);
Route::get('course_teacher', [CourseTeacherController::class, 'index']);
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
