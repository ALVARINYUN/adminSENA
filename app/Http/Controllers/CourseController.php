<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $courses = Course::all();
        return view('courses.index', compact('courses'));
=======
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
    }
}
