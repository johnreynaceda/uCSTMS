<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
       return view('admin.dashboard');
    }
    public function office(){
       return view('admin.school_office');
    }
}
