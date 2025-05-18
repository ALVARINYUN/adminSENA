<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $areas = Area::all();
        return view('areas.index',compact('areas'));
=======
    public function index()
    {
        $areas = Area::all();
        return view('area.index', compact('areas'));
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
    }
}
