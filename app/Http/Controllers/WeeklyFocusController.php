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

    public function edit($id)
    {
        $weeklyFocus = WeeklyFocus::findOrFail($id);
        return view('ManagePerformance.EditWeeklyFocus', compact('weeklyFocus'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'WF_FocusInfo' => 'required|string',
            'WF_AdminInfo' => 'required|string',
            'WF_SocialInfo' => 'required|string',
            'WF_RecoveryInfo' => 'required|string',
        ]);

        $weeklyFocus = WeeklyFocus::findOrFail($id);

        $weeklyFocus->update($request->all());

        return redirect()->route('weekly_focus.index')->with('success', 'Weekly focus item updated successfully.');
    }

    public function destroy($id)
    {
        $weeklyFocus = WeeklyFocus::findOrFail($id);
        $weeklyFocus->delete();

        return redirect()->route('weekly_focus.index')->with('success', 'Weekly Focus deleted successfully.');
    }

    
}



