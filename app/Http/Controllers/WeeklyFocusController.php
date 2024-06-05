<?php

// app/Http/Controllers/WeeklyFocusController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeeklyFocus;
use App\Models\WeeklyFocuses;

class WeeklyFocusController extends Controller
{
    

    public function view()
    {
        return view('ManagePerformance.weekly_focus');
    }
    
    public function create()
    {
        return view('ManagePerformance.weekly_focus');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'WF_Date' => 'required|date',
            'WF_FocusInfo' => 'required|date',
            'WF_AdminInfo' => 'required|string',
            'WF_SocialInfo' => 'required|string',
            'WF_RecoveryInfo' => 'required|string',
            // 'wf_feedback_date' => 'required|date',
        ]);

        // Debugging line
        //Log::info('Validated data:', $validated);

        //WeeklyFocus::create($validated);

        // Debugging line
        //Log::info('Data saved to database.');

        $weeklyFocus = new WeeklyFocus();
        $weeklyFocus->WF_Date = $request->input('WF_Date');
        $weeklyFocus->WF_FocusInfo = $request->input('WF_FocusInfo');
        $weeklyFocus->WF_AdminInfo = $request->input('WF_AdminInfo');
        $weeklyFocus->WF_SocialInfo = $request->input('WF_SocialInfo');
        $weeklyFocus->WF_RecoveryInfo = $request->input('WF_RecoveryInfo');
        $weeklyFocus->save();

        return redirect()->back()->with('success', 'Weekly Focus saved successfully.');
    }
}

