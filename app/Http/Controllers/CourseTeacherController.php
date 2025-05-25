<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use App\Models\CourseTeacher;
use App\Models\Teacher;

class CourseTeacherController extends Controller
{
    public function index()
    {
        $courses = Course::with('teachers')->get();
        return view('courses_teachers.index', compact('courses'));
    }
    public function create()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        return view('courses_teachers.create', compact('courses', 'teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'required|exists:teachers,id'
        ]);

        $course = Course::findOrFail($validated['course_id']);
        $course->teachers()->attach($validated['teacher_id']);

        return redirect()->route('courseteacher.index')->with('success', 'Relación creada');
    }
 public function destroy(Course $course, Teacher $teacher)
{
    $course->teachers()->detach($teacher->id);
    return redirect()->route('courseteacher.index') // Redirige al listado de relaciones
        ->with('success', 'Relación eliminada');
}
}
