<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
class CourseTeacherController extends Controller
{
public function index()
{
    $courses = Course::with('teachers')->get();
    
    return view('courses_teachers.index', compact('courses'));
}
 
}
