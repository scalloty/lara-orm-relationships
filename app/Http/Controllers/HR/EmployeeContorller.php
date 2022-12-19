<?php

namespace App\Http\Controllers\HR;

use App\Http\Controllers\Controller;
use App\Models\HR\Employee;

class EmployeeContorller extends Controller
{
    public function index()
    {
        return view('employee',['employees' => Employee::all()]);
    }
}
