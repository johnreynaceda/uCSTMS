<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function index()
    {
        return view('office.dashboard');
    }

    public function query()
    {
        return view('office.query');
    }
    public function openQuery($id)
    {
        return view('office.openQuery', [
            'id' => $id,
        ]);
    }
    public function service()
    {
        return view('office.service');
    }
    public function appointment()
    {
        return view('office.appointment');
    }
    public function calendar()
    {
        return view('office.calendar');
    }
    public function manageAppointment()
    {
        return view('office.manageAppointment');
    }
}
