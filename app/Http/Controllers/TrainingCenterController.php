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
}
