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
use App\Models\Apprentice;

Route::get('/', function(){
    return view('bienvenido');
});

Route::get('computers/create', [ComputerController::class, 'create']) -> name('computers.create');
Route::post('computers/store', [ComputerController::class, 'store'])->name('computers.store'); 
Route::get('ormconsultas',[OrmController::class,'consultas']);
Route::get('/apprentice',[ApprenticeController::class,'index'])->name('apprentices.index');
Route::get('/area',[AreaController::class,'index'])->name ('areas.index');
Route::get('/computer',[ComputerController::class,'index'])->name('computers.index');;
Route::get('/course',[CourseController::class,'index'])->name('course.index');
Route::get('/teachers',[TeacherController::class,'index'])-> name('teacher.index');
Route::get('/Training-center',[TrainingCenterController::class,'index'])-> name('trainingcenters.index');
Route::get('/courses_teachers',[CourseTeacherController::class,'index'])->name('courseteacher.index');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('apprentices.store'); 
Route::get('apprentices/create', [ApprenticeController::class, 'create']) -> name('apprentices.create');
Route::get('/areas/create',[AreaController::class,'create'])->name ('areas.create');
Route::post('/areas/store',[AreaController::class,'store'])->name ('areas.store');
Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
Route::post('/course/store',[CourseController::class,'store'])->name('course.store');
Route::get('/teachers/create',[TeacherController::class,'create'])-> name('teacher.create');
Route::post('/teachers/store',[TeacherController::class,'store'])-> name('teacher.store');
Route::get('/Training-center/create',[TrainingCenterController::class,'create'])-> name('trainingcenters.create');
Route::post('/Training-center/store',[TrainingCenterController::class,'store'])-> name('trainingcenters.store');
Route::get('/courses_teachers/create',[CourseTeacherController::class,'create'])->name('courseteacher.create');
Route::post('/courses_teachers/store',[CourseTeacherController::class,'store'])->name('courseteacher.store');