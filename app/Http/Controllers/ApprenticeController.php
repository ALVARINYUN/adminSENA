<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;

class ApprenticeController extends Controller
{
    public function index(){
    $apprentices = Apprentice::all();
    return view('apprentices.index', compact('apprentices'));
    }
    public function create(){
        return view('apprentices.create');
    }
    public function store(Request $request){
        $apprentice = new Apprentice;
        $apprentice-> name = $request ->name;
        $apprentice-> email = $request ->email;
        $apprentice-> cell_number = $request ->cell_number;
        $apprentice-> course_id = $request ->curse_id;
        $apprentice-> computer_id = $request ->computer_id;
        $apprentice->save();
        return redirect()->route('apprentices.index');
    }
    public function destroy(Apprentice $apprentice){
        $apprentice->delete();
        return redirect()->route('apprentices.index');
    }

}
