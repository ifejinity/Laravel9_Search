<?php

namespace App\Http\Controllers;

use App\Models\Student as ModelsStudent;
use Illuminate\Http\Request;

class Student extends Controller
{
    public function search(Request $request)
    {
        $input = $request->input('input');
        $students = ModelsStudent::WHERE('id', $input)->paginate(15);
        return view('student.index')
            -> with(compact('students'));
    }

    public function index()
    {
        $students = ModelsStudent::ORDERBY('id', 'asc')->paginate(15);
        return view('student.index')
            -> with(compact('students'));
    }
}
