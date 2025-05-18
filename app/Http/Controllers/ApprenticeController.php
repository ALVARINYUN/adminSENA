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
}
