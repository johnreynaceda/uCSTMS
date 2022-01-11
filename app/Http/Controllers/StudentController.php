<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.dashboard');
    }
    public function service()
    {
        return view('student.service');
    }
    public function appointment()
    {
        return view('student.appointment');
    }
    public function query($id)
    {
        return view('student.query', [
            'id' => $id,
        ]);
    }
}
