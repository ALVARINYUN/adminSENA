<?php

namespace App\Http\Controllers;
use App\Models\Course;
use Illuminate\Http\Request;


class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }
    public function create(){
        return view ('courses.create');
    }
    public function store (Request $request){
        $course = new Course;
        $course ->course_number = request()-> course_number;
        $course -> day = request()->day;
        $course -> area_id = request()-> area_id;
        $course -> training_center_id = request()-> training_center_id;
        $course->save();
        return redirect()->route('course.index');
    }
    public function destroy(Course $course){
        $course->delete();
        return redirect()->route('course.index');
    }
    public function edit(Course $course){
        return view('courses.edit', compact('course'));
    }
    public function update(Request $request, Course $course){
        $course->course_number = request()-> course_number;
        $course->day = request()->day;
        $course->area_id = request()-> area_id;
        $course->training_center_id = request()-> training_center_id;
        $course->save();
        return redirect()->route('course.index');
    }
}
