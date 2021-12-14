<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index(){
        return view('office.dashboard');
    }

    public function query(){
        return view('office.query');
    }
}
