<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function attendance(Request $request)
    {
        // Logic to handle attendance
        return view('staff.attendance-staff');
    }
}
