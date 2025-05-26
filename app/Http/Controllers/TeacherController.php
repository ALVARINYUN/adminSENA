<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }
    public function create(){
        return view('teachers.create');
    }
    public function store(Request $request){
        $teacher = new Teacher();
        $teacher -> name = $request-> name;
        $teacher ->email = $request->email;
        $teacher ->area_id = $request->area_id;
        $teacher ->training_center_id = $request -> training_center_id;
        $teacher->save();
        return redirect()->route('teacher.index');
    }
    public function destroy(Teacher $teacher){
        $teacher->delete();
        return redirect()->route('teacher.index');
    }
    public function edit(Teacher $teacher){
        return view('teachers.edit', compact('teacher'));
    }
    public function update(Request $request, Teacher $teacher){
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->area_id = $request->area_id;
        $teacher->training_center_id = $request->training_center_id;
        $teacher->save();
        return redirect()->route('teacher.index');
    }
}
