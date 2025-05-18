<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Teacher;
use App\Models\Course;
class CourseTeacherController extends Controller
{
public function index()
{
    $courses = Course::with('teachers')->get();
    
    return view('courses_teachers.index', compact('courses'));
}
 
=======
use App\Models\CourseTeacher;

class CourseTeacherController extends Controller
{
    public function index()
    {
        $course_teachers = CourseTeacher::all();
        return view('course_teacher.index', compact('course_teachers'));
    }
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
}
