<?php

namespace App\Http\Controllers;

use App\Models\Publication;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('PublicationPersonal.NewPublicationForm');
    }

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
    public function destroy(Publication $post)
    {
        //
    }

    public function showPublication($id)
    {
        $publication = Publication::where('Publication_ID', $id)->firstOrFail();
        return view('PublicationPersonal.ViewPublication', compact('publication'));
    }   
}

