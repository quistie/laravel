<?php

namespace App\Http\Controllers;

use App\Models\Bsit3;
use Illuminate\Http\Request;

class Bsit3Controller extends Controller
{
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
     $data= $request->validate([
        'name'=>'required',
        'address'=>'required',
        'age'=>'required'
      ]);
      $newStudent = Bsit3::create($data);
      return redirect(route('students.index'));
    }
    public function index(){
      $students = Bsit3::all();
      return view('students.index', compact('students'));
    }
  }


