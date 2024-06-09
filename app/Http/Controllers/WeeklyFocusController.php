<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeeklyFocus;

class WeeklyFocusController extends Controller
{
    public function index()
    {
        $weeklyFocuses = WeeklyFocus::all();
        return view('weekly_focus.index', compact('weeklyFocuses'));
    }

    public function create()
    {
        return view('weekly_focus.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'WF_StartDate' => 'required|date',
            'WF_CompleteDate' => 'required|date',
            'WF_FocusInfo' => 'required|string',
            'WF_AdminInfo' => 'required|string',
            'WF_SocialInfo' => 'required|string',
            'WF_RecoveryInfo' => 'required|string',
            'WF_Feedback' => 'nullable|string',
        ]);

        WeeklyFocus::create($validated);

        return redirect()->route('weekly_focus.index')->with('success', 'Weekly Focus saved successfully.');

    }
}




