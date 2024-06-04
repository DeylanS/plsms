<?php

// app/Http/Controllers/WeeklyFocusController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeeklyFocus;

class WeeklyFocusController extends Controller
{
    public function create()
    {
        return view('ManagePerformance.weekly_focus');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'wf_start_date' => 'required|date',
            'wf_end_date' => 'required|date',
            'wf_content' => 'required|string',
            'wf_blocktype' => 'required|string',
            'wf_feedback' => 'required|string',
            'wf_feedback_date' => 'required|date',
        ]);

        // Debugging line
        \Log::info('Validated data:', $validated);

        WeeklyFocus::create($validated);

        // Debugging line
        \Log::info('Data saved to database.');

        return redirect()->route('weekly_focus.create')->with('success', 'Weekly Focus saved successfully.');
    }
}

