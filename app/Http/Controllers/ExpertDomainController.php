<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Expert_Publication;
use Illuminate\Http\Request;

class ExpertDomainController extends Controller
{

    // ===========================================================================================
    // ExpertAll
    // ===========================================================================================
    public function NewExpertView() {
        return view('ExpertPersonal.NewExpertForm');
    }

    public function OwnExpertListView() {
        return view('ExpertPersonal.ViewOwnExpertList',['expert' => Expert::latest()->get()]);
    }

    public function DetailExpertView($Expert_ID) {

        $expert = Expert::with('expert_publication')->findOrFail($Expert_ID);

        return view('ExpertPersonal.ViewExpert', compact('expert'));
    }

    public function EditExpertView($Expert_ID) {

        $expert = Expert::with('expert_publication')->findOrFail($Expert_ID);

        return view('ExpertPersonal.EditExpert', compact('expert'));
    }
    

    // ===========================================================================================
    // ExpertAll
    // ===========================================================================================
    public function AllExpertListView() {
        return view('ExpertAll.ViewAllExpertList',['expert' => Expert::latest()->get()]);
    }

    public function DetailAllExpertView($Expert_ID) {

        $expert = Expert::with('expert_publication')->findOrFail($Expert_ID);
        
        return view('ExpertAll.ViewExpertDetails', compact('expert'));
    }

    public function ReportExpert() {
        return view('ExpertAll.ViewReportOfExpert',['expert' => Expert::latest()->get()]);
    }


    // ===========================================================================================
    // CRUD
    // ===========================================================================================
    public function store(Request $request)
    {
        $request->validate([
            'expertName' => 'required|string|max:255',
            'expertGender' => 'required|string|max:255',
            'expertUni' => 'required|string|max:255',
            'expertEmail' => 'required|email|max:255',
            'expertPhoneNum' => 'nullable|string|max:20',
            'expertRscField' => 'required|string|max:255',
            'publications.*.research' => 'required|string',
            'publications.*.paper' => 'required|string',
            'publications.*.author' => 'required|string',
            'publications.*.year' => 'required|integer|min:1900|max:'.date('Y'),
            'publications.*.file' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        $expert = new Expert();
        $expert->Expert_Name = $request->input('expertName');
        $expert->Expert_Gender = $request->input('expertGender');
        $expert->Expert_University = $request->input('expertUni');
        $expert->Expert_Email = $request->input('expertEmail');
        $expert->Expert_PhoneNum = $request->input('expertPhoneNum');
        $expert->Expert_ResearchField = $request->input('expertRscField');
        $expert->save();

        // Handle the publications
        $publications = $request->input('publications');
        for ($i = 0; $i < count($publications); $i++) {
            // Store the file and get its path
            //$filePath = $request->file('publications')[$i]['file']->store('publications');

            $expertPaper = new Expert_Publication();
            $expertPaper->EP_ResearchTitle = $publications[$i]['research'];
            $expertPaper->EP_PaperTitle = $publications[$i]['paper'];
            $expertPaper->EP_PaperAuthor = $publications[$i]['author'];
            $expertPaper->EP_PaperYear = $publications[$i]['year'];
            //$expertPaper->EP_PaperFile = $filePath;
            $expertPaper->Expert_ID = $expert->Expert_ID;
            $expertPaper->save();
        }

        return redirect()->back()->with('success', 'New expert has been successfully added!');
    }

    public function deleteExpert($Expert_ID)
    {
        $expert = Expert::findOrFail($Expert_ID);
        $expert->delete();

        return redirect()->route('ExpertPersonal.ViewOwnExpertList')->with('success', 'Expert deleted successfully');
    }

    public function updateExpert(Request $request, $Expert_ID)
    {
        $request->validate([
            'expertName' => 'required|string|max:255',
            'expertGender' => 'required|string|max:255',
            'expertUni' => 'required|string|max:255',
            'expertEmail' => 'required|email|max:255',
            'expertPhoneNum' => 'nullable|string|max:15',
            'expertRscField' => 'required|string|max:255',
            'publications' => 'array',
            'publications.*.research' => 'required|string',
            'publications.*.paper' => 'required|string',
            'publications.*.author' => 'required|string',
            'publications.*.year' => 'required|integer|min:1900|max:'.date('Y'),
        ]);

        $expert = Expert::findOrFail($Expert_ID);
        $expert->Expert_Name = $request->input('expertName');
        $expert->Expert_Gender = $request->input('expertGender');
        $expert->Expert_University = $request->input('expertUni');
        $expert->Expert_Email = $request->input('expertEmail');
        $expert->Expert_PhoneNum = $request->input('expertPhoneNum');
        $expert->Expert_ResearchField = $request->input('expertRscField');
        $expert->save();

        $publications = $request->input('publications');
        //for ($i = 0; $i < count($publications); $i++) {
        foreach ($publications as $publication) {
            if (isset($publication['id'])) {
                $expertPublication = Expert_Publication::findOrFail($publication['id']);
                if ($expertPublication) {
                    $expertPublication->EP_ResearchTitle = $publication['research'];
                    $expertPublication->EP_PaperTitle = $publication['paper'];
                    $expertPublication->EP_PaperAuthor = $publication['author'];
                    $expertPublication->EP_PaperYear = $publication['year'];
                    $expertPublication->save();
                }
            } else {
                $expertPublication = new Expert_Publication();
                $expertPublication->EP_ResearchTitle = $publication['research'];
                $expertPublication->EP_PaperTitle = $publication['paper'];
                $expertPublication->EP_PaperAuthor = $publication['author'];
                $expertPublication->EP_PaperYear = $publication['year'];
                //$expertPaper->EP_PaperFile = $filePath;
                $expertPublication->Expert_ID = $expert->Expert_ID;
                $expertPublication->save();
            }
        }


        return redirect()->route('ExpertPersonal.ViewExpert', ['Expert_ID' => $expert->Expert_ID])->with('success', 'Expert updated successfully');
    }

    public function searchExpert(Request $request)
    {
        $search = $request->input('search');

        $expert = Expert::query()
            ->when($search, function ($query, $search) {
                return $query->where('Expert_Name', 'like', "%{$search}%")
                             ->orWhere('Expert_ResearchField', 'like', "%{$search}%");
            })
            ->get();

        return view('ExpertAll.ViewAllExpertList', ['expert' => $expert]);
    }

    public function filterReport(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $expert = Expert::query()
            ->when($month && $month != 'RsrchMonth', function ($query) use ($month) {
                return $query->whereMonth('created_at', date('m', strtotime($month)));
            })
            ->when($year && $year != 'RsrchYear', function ($query) use ($year) {
                return $query->whereYear('created_at', $year);
            })
            ->get();

        //return view('ExpertAll.ViewReportOfExpert', ['expert' => $expert, 'month' => $month, 'year' => $year]);

        $researchFields = $expert->groupBy('Expert_ResearchField')->map(function ($group) {
            return $group->count();
        });
    
        return view('ExpertAll.ViewReportOfExpert', [
            'expert' => $expert, 
            'month' => $month, 
            'year' => $year, 
            'researchFields' => $researchFields
        ]);
    }
}
