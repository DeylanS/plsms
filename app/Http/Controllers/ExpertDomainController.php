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

    public function EditExpertView($Expert_ID) {

        $expert = Expert::with('expert_publication')->findOrFail($Expert_ID);

        return view('ExpertPersonal.EditExpert', compact('expert'));
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
            'expertRscField' => 'required|string|max:255',
            'expertRscTitle' => 'required|string|max:255',
            'publications.*.paper' => 'required|string',
            'publications.*.year' => 'required|integer|min:1900|max:'.date('Y'),
            'publications.*.file' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

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

            $expertPaper = new Expert_Publication();
            $expertPaper->EP_PaperTitle = $publications[$i]['paper'];
            $expertPaper->EP_PaperYear = $publications[$i]['year'];
            //$expertPaper->EP_PaperFile = $filePath;
            $expertPaper->Expert_ID = $expert->Expert_ID;
            $expertPaper->save();
        }

        return redirect()->back()->with('success', 'Expert and publications added successfully');
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
            'expertUni' => 'required|string|max:255',
            'expertEmail' => 'required|email|max:255',
            'expertPhoneNum' => 'required|string|max:15',
            'expertRscField' => 'required|string|max:255',
            'expertRscTitle' => 'required|string|max:255',
            'publications' => 'array',
            'publications.*.paper' => 'required|string|max:255',
            'publications.*.year' => 'required|integer|min:1900|max:' . date('Y'),
        ]);

        $expert = Expert::findOrFail($Expert_ID);
        $expert->Expert_Name = $request->input('expertName');
        $expert->Expert_University = $request->input('expertUni');
        $expert->Expert_Email = $request->input('expertEmail');
        $expert->Expert_PhoneNum = $request->input('expertPhoneNum');
        $expert->Expert_ResearchField = $request->input('expertRscField');
        $expert->Expert_ResearchTitle = $request->input('expertRscTitle');
        $expert->save();

        $publications = $request->input('publications');
        //for ($i = 0; $i < count($publications); $i++) {
        foreach ($publications as $publication) {
            if (isset($publication['id'])) {
                $expertPublication = Expert_Publication::findOrFail($publication['id']);
                if ($expertPublication) {
                    $expertPublication->EP_PaperTitle = $publication['paper'];
                    $expertPublication->EP_PaperYear = $publication['year'];
                    $expertPublication->save();
                }
            } else {
                $expertPublication = new Expert_Publication();
                $expertPublication->EP_PaperTitle = $publication['paper'];
                $expertPublication->EP_PaperYear = $publication['year'];
                //$expertPaper->EP_PaperFile = $filePath;
                $expertPublication->Expert_ID = $expert->Expert_ID;
                $expertPublication->save();
            }
        }


        return redirect()->route('ExpertPersonal.ViewExpert', ['Expert_ID' => $expert->Expert_ID])->with('success', 'Expert updated successfully');
    }
}
