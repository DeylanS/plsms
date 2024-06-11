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
            'WF_StartDate' => 'required|date',
            'WF_CompleteDate' => 'required|date',
            'WF_FocusInfo' => 'required|string',
            'WF_AdminInfo' => 'required|string',
            'WF_SocialInfo' => 'required|string',
            'WF_RecoveryInfo' => 'required|string',
        ]);

        WeeklyFocus::create($request->all());
        return redirect()->route('weekly_focus.index')->with('success', 'Weekly Focus created successfully.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'WF_FocusInfo' => 'required|string',
            'WF_AdminInfo' => 'required|string',
            'WF_SocialInfo' => 'required|string',
            'WF_RecoveryInfo' => 'required|string',
        ]);

        $weeklyFocus = WeeklyFocus::find($id);

        if (!$weeklyFocus) {
            return redirect()->route('weekly_focus.index')->with('error', 'Weekly focus item not found.');
        }

        $weeklyFocus->update([
            'WF_FocusInfo' => $request->input('WF_FocusInfo'),
            'WF_AdminInfo' => $request->input('WF_AdminInfo'),
            'WF_SocialInfo' => $request->input('WF_SocialInfo'),
            'WF_RecoveryInfo' => $request->input('WF_RecoveryInfo'),
        ]);

        return redirect()->route('weekly_focus.index')->with('success', 'Weekly focus item updated successfully.');
    }
    public function edit($id)
    {
        $weeklyFocus = WeeklyFocus::findOrFail($id);
        return view('ManagePerformance.EditWeeklyFocus', compact('weeklyFocus'));
    }
}

