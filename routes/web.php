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
use App\Models\TrainingCenter;

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
Route::get('/trainingcenters', [TrainingCenterController::class, 'index'])->name('trainingcenters.index');
Route::get('/courses_teachers',[CourseTeacherController::class,'index'])->name('courseteacher.index');
Route::post('apprentices/store', [ApprenticeController::class, 'store'])->name('apprentices.store'); 
Route::get('apprentices/create', [ApprenticeController::class, 'create']) -> name('apprentices.create');
Route::get('/areas/create',[AreaController::class,'create'])->name ('areas.create');
Route::post('/areas/store',[AreaController::class,'store'])->name ('areas.store');
Route::get('/course/create',[CourseController::class,'create'])->name('course.create');
Route::post('/course/store',[CourseController::class,'store'])->name('course.store');
Route::get('/teachers/create',[TeacherController::class,'create'])-> name('teacher.create');
Route::post('/teachers/store',[TeacherController::class,'store'])-> name('teacher.store');
Route::get('/trainingcenters/create', [TrainingCenterController::class, 'create'])->name('trainingcenters.create');
Route::post('/Trainingcenter/store',[TrainingCenterController::class,'store'])-> name('trainingcenters.store');
Route::get('/courses_teachers/create',[CourseTeacherController::class,'create'])->name('courseteacher.create');
Route::post('/courses_teachers/store',[CourseTeacherController::class,'store'])->name('courseteacher.store');
Route::delete('apprentice/{apprentice}', [ApprenticeController::class, 'destroy'])->name('apprentice.destroy');
Route::delete('area/{area}', [AreaController::class, 'destroy'])->name('area.destroy');
Route::delete('computer/{computer}', [ComputerController::class, 'destroy'])->name('computer.destroy');
Route::delete('course/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
Route::delete('teacher/{teacher}', [TeacherController::class, 'destroy'])->name('teacher.destroy');
Route::delete('ttrainingcenter/{trainingcenter}', [TrainingCenterController::class, 'destroy'])->name('trainingcenters.destroy');
Route::delete('/courses/{course}/teachers/{teacher}', [CourseTeacherController::class, 'destroy'])->name('courses.teachers.destroy');
Route::get('apprentice/{apprentice}/editar',[ApprenticeController::class,'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}',[ApprenticeController::class,'update'])->name('apprentice.update');
Route::get('area/{area}/editar', [AreaController::class, 'edit'])->name('area.edit');
Route::put('area/{area}',[AreaController::class,'update'])->name('area.update');
Route::get('computer/{computer}/editar', [ComputerController::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}',[ComputerController::class,'update'])->name('computer.update');
Route::get('course/{course}/editar', [CourseController::class, 'edit'])->name('course.edit');
Route::put('course/{course}',[CourseController::class,'update'])->name('course.update');
Route::get('teacher/{teacher}/editar', [TeacherController::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
Route::get('/trainingcenters/{trainingcenter}/editar', [TrainingCenterController::class, 'edit'])->name('trainingcenters.edit'); 
Route::put('trainingcenter/{trainingcenter}',[TrainingCenterController::class,'update'])->name('trainingcenter.update');
Route::get('/courseteacher/{course}/{teacher}/edit', [CourseTeacherController::class, 'edit'])->name('courseteacher.edit');
Route::put('/courseteacher/{course}/{teacher}', [CourseTeacherController::class, 'update'])->name('courseteacher.update');