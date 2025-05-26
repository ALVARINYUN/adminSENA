<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index() {
        $trainingcenters = TrainingCenter::all();
        return view('trainingcenters.index', compact('trainingcenters'));
    }

    public function create() {
        return view('trainingcenters.create');
    }

    public function store(Request $request) {
        TrainingCenter::create($request->all());
        return redirect()->route('trainingcenters.index');
    }

    public function edit(TrainingCenter $trainingcenter) {
        return view('trainingcenters.edit', compact('trainingcenter'));
    }

    public function update(Request $request, TrainingCenter $trainingcenter) {
        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();
        return redirect()->route('trainingcenters.index');
    }

    public function destroy(TrainingCenter $trainingcenter) {
        $trainingcenter->delete();
        return redirect()->route('trainingcenters.index');
    }
}