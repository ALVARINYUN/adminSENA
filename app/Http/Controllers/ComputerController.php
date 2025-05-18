<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $computers = Computer::all();
        return view('computers.index',compact('computers'));
    }
=======
    public function index()
{
    $computers = Computer::all();
    return view('computer.index', compact('computers'));
}
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
}
