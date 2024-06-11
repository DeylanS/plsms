<?php

namespace App\Http\Controllers;

use App\Models\WeeklyFocus;
use Illuminate\Http\Request;

class WeeklyFocusController extends Controller
{
    public function index()
    {
        $weeklyFocuses = WeeklyFocus::all();
        return view('ManagePerformance.ViewWeeklyFocus', compact('weeklyFocuses'));
    }

    public function create()
    {
        return view('ManagePerformance.NewWeeklyFocusForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'WF_Date' => 'required|date',
            'WF_CompleteDate' => 'required|date',
            'WF_FocusInfo' => 'required|string',
            'WF_AdminInfo' => 'required|string',
            'WF_SocialInfo' => 'required|string',
            'WF_RecoveryInfo' => 'required|string',
        ]);

        WeeklyFocus::create($request->all());
        return redirect()->route('weekly_focus.index')->with('success', 'Weekly Focus created successfully.');
    }
}
