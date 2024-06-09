<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DraftThesis;

class DraftThesisController extends Controller
{
    public function index()
    {
        $draftTheses = DraftThesis::all();
        return view('ManagePerformance.ViewDraftThesis', compact('draftTheses'));
    }

    public function create()
    {
        return view('draft_thesis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dt_title' => 'required|string|max:255',
            'dt_draft_number' => 'required|integer',
            'dt_start_date' => 'required|date',
            'dt_complete_date' => 'required|date',
            'dt_prep_days' => 'required|date',
            'dt_pages_number' => 'required|integer',
            'dt_ddc' => 'required|string|max:255',
        ]);

        DraftThesis::create([
            'dt_title' => $request->dt_title,
            'dt_draft_number' => $request->dt_draft_number,
            'dt_start_date' => $request->dt_start_date,
            'dt_complete_date' => $request->dt_complete_date,
            'dt_prep_days' => $request->dt_prep_days,
            'dt_pages_number' => $request->dt_pages_number,
            'dt_ddc' => $request->dt_ddc,
        ]);

        return redirect()->route('draft_thesis.index')->with('success', 'Draft Thesis created successfully.');
    }

    public function show($id)
    {
        $draftThesis = DraftThesis::findOrFail($id);
        return view('draft_thesis.show', compact('draftThesis'));
    }

    public function edit($id)
    {
        $draftThesis = DraftThesis::findOrFail($id);
        return view('draft_thesis.edit', compact('draftThesis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'dt_title' => 'required|string|max:255',
            'dt_draft_number' => 'required|integer',
            'dt_start_date' => 'required|date',
            'dt_complete_date' => 'required|date',
            'dt_prep_days' => 'required|date',
            'dt_pages_number' => 'required|integer',
            'dt_ddc' => 'required|string|max:255',
        ]);

        $draftThesis = DraftThesis::findOrFail($id);
        $draftThesis->update([
            'dt_title' => $request->dt_title,
            'dt_draft_number' => $request->dt_draft_number,
            'dt_start_date' => $request->dt_start_date,
            'dt_complete_date' => $request->dt_complete_date,
            'dt_prep_days' => $request->dt_prep_days,
            'dt_pages_number' => $request->dt_pages_number,
            'dt_ddc' => $request->dt_ddc,
        ]);

        return redirect()->route('draft_thesis.index')->with('success', 'Draft Thesis updated successfully.');
    }

    public function destroy($id)
    {
        $draftThesis = DraftThesis::findOrFail($id);
        $draftThesis->delete();

        return redirect()->route('draft_thesis.index')->with('success', 'Draft Thesis deleted successfully.');
    }
}



