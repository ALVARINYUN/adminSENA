<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index(){
        $trainingsCenters = TrainingCenter::all();
        return view('trainingcenters.index', compact('trainingsCenters'));
    }
    public function create(){
        return view('trainingcenters.create');
    }
    public function store(Request $request){
        $trainingsCenter = new TrainingCenter();
        $trainingsCenter->name = $request->name;
        $trainingsCenter->location = $request->location;
        $trainingsCenter-> save();
        return redirect()->route('trainingcenters.index');
    }
}
