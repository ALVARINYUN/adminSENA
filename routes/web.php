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

Route::get('/', function(){
    return view('bienvenido');
});
Route::get('ormconsultas',[OrmController::class,'consultas']);
Route::get('/apprentice',[ApprenticeController::class,'index']);
Route::get('/area',[AreaController::class,'index']);
Route::get('/computer',[ComputerController::class,'index']);
Route::get('/course',[CourseController::class,'index']);
Route::get('/teachers',[TeacherController::class,'index']);
Route::get('/Training-center',[TrainingCenterController::class,'index']);
Route::get('/courses_teachers',[CourseTeacherController::class,'index']);
