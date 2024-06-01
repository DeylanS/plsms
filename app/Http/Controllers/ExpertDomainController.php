<?php

namespace App\Http\Controllers;

use App\Models\Expert;
use App\Models\Expert_Publication;
use Illuminate\Http\Request;

class ExpertDomainController extends Controller
{
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

    public function EditExpertView() {
        return view('ExpertPersonal.EditExpert');
    }

    public function AllExpertListView() {
        return view('ExpertAll.ViewAllExpertList',['expert' => Expert::latest()->get()]);
    }

    public function DetailAllExpertView() {
        return view('ExpertAll.ViewExpertDetails');
    }

    public function ReportExpert() {
        return view('ExpertAll.ViewReportOfExpert');
    }

    public function store(Request $request)
    {
        $request->validate([
            'expertName' => 'required|string|max:255',
            'expertUni' => 'required|string|max:255',
            'expertEmail' => 'required|email|max:255',
            'expertPhoneNum' => 'required|string|max:20',
            'publications.*.paper' => 'required|string',
            'publications.*.year' => 'required|integer|min:1900|max:'.date('Y'),
            'publications.*.file' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        // $expert = Expert::create([
        //     'Expert_Name' => $$request->input('expertName'),
        //     'Expert_University' => $request->input('expertUni'),
        //     'Expert_Email' => $request->input('expertEmail'),
        //     'Expert_PhoneNum' => $request->input('expertPhoneNum'),
        //     'Expert_ResearchField' => $request->input('expertRscField'),
        //     'Expert_ResearchTitle' => $request->input('expertRscTitle'),
        // ]);

        $expert = new Expert();
        $expert->Expert_Name = $request->input('expertName');
        $expert->Expert_University = $request->input('expertUni');
        $expert->Expert_Email = $request->input('expertEmail');
        $expert->Expert_PhoneNum = $request->input('expertPhoneNum');
        $expert->Expert_ResearchField = $request->input('expertRscField');
        $expert->Expert_ResearchTitle = $request->input('expertRscTitle');
        $expert->save();

        // Handle the publications
        $publications = $request->input('publications');
        for ($i = 0; $i < count($publications); $i++) {
            // Store the file and get its path
            //$filePath = $request->file('publications')[$i]['file']->store('publications');

            // Create the publication
            // $publication = Expert_Publication::create([
            //     'EP_PaperTitle' => $publications[$i]['paper'],
            //     'EP_PaperYear' => $publications[$i]['year'],
            //     'EP_PaperFile' => $filePath,
            //     'Expert_ID' => $expert->id
            // ]);

            $expertPaper = new Expert_Publication();
            $expertPaper->EP_PaperTitle = $publications[$i]['paper'];
            $expertPaper->EP_PaperYear = $publications[$i]['year'];
            //$expertPaper->EP_PaperFile = $filePath;
            $expertPaper->Expert_ID = $expert->Expert_ID;
            $expertPaper->save();
        }

        return redirect()->back()->with('success', 'Expert and publications added successfully');
    }
}
