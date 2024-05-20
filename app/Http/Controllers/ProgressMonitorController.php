<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressMonitorController extends Controller
{
    public function ManagePerformanceHome() {
        return view('ManagePerformance.ManagePerformanceHome');
    }

}