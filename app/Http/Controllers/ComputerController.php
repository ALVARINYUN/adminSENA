<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;


class ComputerController extends Controller
{
    public function index()
{
    $computers = Computer::all();
    return view('computers.index', compact('computers'));
}
}
