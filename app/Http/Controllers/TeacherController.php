<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
=======
    public function index()
    {
    $teachers = Teacher::all();
    return view('teacher.index', compact('teachers'));
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
    }
}
