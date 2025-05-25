<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseTeacher;

class CourseTeacherController extends Controller
{
    public function index()
    {
        // Cargar cursos con sus profesores usando eager loading
        $courses = Course::with('teachers')->get();
        return view('courses_teachers.index', compact('courses'));
    }
    public function create()
    {
        return view('courses_teachers.create');
    }
    public function store(Request $request){
        

    }
}
