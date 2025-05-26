<?php

namespace App\Http\Controllers;
use App\Models\Area;
use Illuminate\Http\Request;


class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return view('areas.index', compact('areas'));
    }
    public function create(){
        return view('areas.create');
    }
    public function store (){
        $area = new Area();
        $area -> name = request() -> name;
        $area->save();
        return redirect()->route('areas.index');
    }
    public function destroy(Area $area){
         $area->delete();
        return redirect()->route('areas.index');
    }
    public function edit(Area $area){
        return view('areas.edit', compact('area'));
    }
    public function update(Area $area){
         $area->name = request()->name;
        $area->save();
        return redirect()-> route('areas.index');
    }
}
