<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticeController extends Controller
{
<<<<<<< HEAD
    public function index(){
    $apprentices = Apprentice::all();
    return view('apprentices.index', compact('apprentices'));
=======
    public function index()
    {
        $apprentices = Apprentice::all();
        return view('apprentice.index', compact('apprentices'));
>>>>>>> b57ecaf2df31ed2a79b7baff05309c07e7fe3db4
    }
}
