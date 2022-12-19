<?php

namespace App\Http\Controllers\Park;

use App\Models\HR\Employee;
use App\Http\Controllers\Controller;

class ParkingController extends Controller
{
    public function index()
    {
        return view('parking',['employees' => Employee::all()]);
    }
}
