<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$publications = Publication::all();
        //dd($publications); // Dump and die to check the retrieved data

        return view('PublicationAll.ViewPublicationList',['publications' => Publication::latest()->get()]);
        //return view('Publication.index', ['publications' => Publication::get()]);
        //return view('posts.index',['posts' => Publication::with('user')->latest()->get()]);
    }

    public function create()
    {
        $mentors = DB::table('mentor')
            ->join('user', 'mentor.User_ID', '=', 'user.User_ID')
            ->select('mentor.Mentor_ID', 'user.User_FullName')
            ->get();
        
        return view('PublicationPersonal.NewPublicationForm', compact('mentors'));
    }


    public function showOwnPublicationList()
    {
        //$publications = Publication::all();
        //dd($publications); // Dump and die to check the retrieved data

        return view('PublicationPersonal.ViewOwnPublicationList',['publications' => Publication::where('User_ID', 1)->latest()->get()]);
        //return view('Publication.index', ['publications' => Publication::get()]);
        //return view('posts.index',['posts' => Publication::with('user')->latest()->get()]);
    }
    public function searchPublications(Request $request)
    {
        $search = $request->input('search');
        $publications = DB::table('publications')
            ->join('mentor', 'publications.Mentor_ID', '=', 'mentor.Mentor_ID')
            ->join('user', 'mentor.User_ID', '=', 'user.User_ID')
            ->where('publications.Publication_Title', 'LIKE', "%{$search}%")
            ->select('publications.*', 'user.User_FullName as Mentor_Name')
            ->get();
            
        return view('PublicationAll.ViewPublicationList', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        return view('PublicationPersonal.NewPublicationForm');
    }*/

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'Mentor_ID'=>'required|int',
            'User_ID'=>'required|int',
            'Publication_Field'=>'required|string',
            'Publication_Title'=>'required|string',
            'Publication_Date'=>'required|date',
            'Publication_File'=>'required|string',
            'Publication_Author'=>'required|string',
            'Publication_Type'=>'required|string'
        ]);
        Publication::create($data);
        //$request->Publication::create($data);
        
        return redirect(route('PublicationPersonal.ViewOwnPublicationList'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $publication = Publication::where('Publication_ID', $id)->firstOrFail();
        return view('PublicationPersonal.EditPublication', compact('publication'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'Publication_Field' => 'required',
            'Publication_Title' => 'required',
            'Publication_Date' => 'required|date',
            'Publication_File' => 'required|url',
            'Publication_Author' => 'required',
            'Publication_Type' => 'required',
        ]);

        // Find the publication by ID
        $publication = Publication::where('Publication_ID', $id)->firstOrFail();

        // Update the publication record with the new data
        $publication->update([
            'Publication_Field' => $request->Publication_Field,
            'Publication_Title' => $request->Publication_Title,
            'Publication_Date' => $request->Publication_Date,
            'Publication_File' => $request->Publication_File,
            'Publication_Author' => $request->Publication_Author,
            'Publication_Type' => $request->Publication_Type,
        ]);

        // Redirect back to the index page with a success message
        //return redirect()->route('PublicationPersonal.index')->with('success', 'Publication updated successfully.');
        return redirect()->route('PublicationPersonal.ViewPublication', ['id' => $id])->with('success', 'Publication updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();

        return redirect(route('PublicationPersonal.ViewOwnPublicationList'))->with('successfulDelete', 'Data Deleted');
    }


    public function showPublication($id)
    {
        //$publication = Publication::where('Publication_ID', $id)->firstOrFail();
        $publication = DB::table('publications')
        ->join('mentor', 'publications.Mentor_ID', '=', 'mentor.Mentor_ID')
        ->join('user', 'mentor.User_ID', '=', 'user.User_ID')
        ->where('publications.Publication_ID', $id)
        ->select('publications.*', 'user.User_FullName as Mentor_Name')
        ->first();
        return view('PublicationPersonal.ViewPublication', compact('publication'));
        
    }

    public function showPublicationDetails($id)
    {
        $publication = Publication::where('Publication_ID', $id)->firstOrFail();
        return view('PublicationAll.ViewPublicationDetails', compact('publication'));
    }   

    public function generateReport()
    {
        $reportData = DB::table('publications')
                        ->select(DB::raw('YEAR(Publication_Date) as year'), DB::raw('count(*) as total'))
                        ->groupBy(DB::raw('YEAR(Publication_Date)'))
                        ->get();

        return view('PublicationAll.ViewReportOfPublication', compact('reportData'));
    }


}

