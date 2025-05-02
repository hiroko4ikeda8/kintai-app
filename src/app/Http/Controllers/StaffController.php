<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function attendance(Request $request)
    {
        // Logic to handle attendance
        Log::info('attendance() が呼ばれました！');
        return view('staff.attendance-staff');
    }
}
