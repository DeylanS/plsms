<?php

namespace App\Http\Controllers;

use App\Models\DraftThesis;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    public function destroy($id)
    {
        $draftThesis = DraftThesis::findOrFail($id);
        $draftThesis->delete();

        return redirect()->route('draft_thesis.index')->with('success', 'Draft Thesis deleted successfully.');
    }
    
    public function store(Request $request)
{
    $request->validate([
        'dt_title' => 'required',
        'dt_draft_number' => 'required|integer',
        'dt_start_date' => 'required|date',
        'dt_complete_date' => 'required|date',
        'dt_pages_number' => 'required|integer',
        'dt_ddc' => 'required|string',
    ]);

    // Calculate preparation days
    $previousDraft = DraftThesis::orderBy('dt_complete_date', 'desc')->first();
    $prepDays = 0;

    if ($previousDraft) {
        $prepDays = $this->calculatePrepDays($previousDraft->dt_complete_date, $request->dt_complete_date);
    }

    DraftThesis::create([
        'dt_title' => $request->dt_title,
        'dt_draft_number' => $request->dt_draft_number,
        'dt_start_date' => $request->dt_start_date,
        'dt_complete_date' => $request->dt_complete_date,
        'dt_pages_number' => $request->dt_pages_number,
        'dt_ddc' => $request->dt_ddc,
        'dt_prep_days' => $prepDays, // Store preparation days
    ]);

        return redirect()->route('draft_thesis.index')->with('success', 'Draft Thesis created successfully.');
    }

    private function calculatePrepDays($previousCompleteDate, $currentCompleteDate)
    {
        // Exclude Sundays from the calculation
        $start = new \DateTime($previousCompleteDate);
        $end = new \DateTime($currentCompleteDate);
        $interval = new \DateInterval('P1D');
        $prepDays = 0;

        while ($start <= $end) {
            if ($start->format('N') != 7) { // Not a Sunday
                $prepDays++;
            }
            $start->add($interval);
        }

        return $prepDays - 1; // Exclude the end date itself
    }

    public function generate(Request $request)
    {
        // Retrieve the selected month from the request
        $selectedMonth = $request->input('month');

        // Query the draft theses for the selected month
        $draftTheses = DraftThesis::whereMonth('dt_complete_date', $selectedMonth)->get();

        // Pass the retrieved data to the view
        return view('ManagePerformance.Report', compact('draftTheses'));
    }

    
}
