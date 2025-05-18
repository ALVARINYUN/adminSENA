<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCenterController extends Controller
{
<<<<<<< HEAD
    public function index(){
        $trainingsCenters = TrainingCenter::all();
        return view('trainingcenters.index', compact('trainingsCenters'));
=======
    public function index()
    {
        $training_centers = TrainingCenter::all();
        return view('training_center.index', compact('training_centers'));
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
    }
}
