<?php

namespace App\Http\Controllers;

use App\Models\DraftThesis;
use Illuminate\Http\Request;

class DraftThesisController extends Controller
{
    public function index()
    {
        $draftTheses = DraftThesis::all();
        return view('ManagePerformance.ViewDraftThesis', compact('draftTheses'));
    }

    public function create()
    {
        return view('ManagePerformance.NewDraftThesisForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dt_title' => 'required',
            'dt_draft_number' => 'required|integer',
            'dt_start_date' => 'required|date',
            'dt_complete_date' => 'required|date',
            'dt_prep_days' => 'required|date',
            'dt_pages_number' => 'required|integer',
            'dt_ddc' => 'required|string',
        ]);

        DraftThesis::create($request->all());
        return redirect()->route('draft_thesis.index')->with('success', 'Draft Thesis created successfully.');
    }
}
