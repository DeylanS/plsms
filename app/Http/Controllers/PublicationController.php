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

        return view('Publication.index',['publications' => Publication::latest()->get()]);
        //return view('Publication.index', ['publications' => Publication::get()]);
        //return view('posts.index',['posts' => Publication::with('user')->latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Publication.pubcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'Publication_Field'=>'required|string',
            'Publication_Title'=>'required|string',
            'Publication_File'=>'required|string',
            'Publication_Author'=>'required|string',
            'Publication_Type'=>'required|string'
        ]);
        Publication::create($data);
        //$request->Publication::create($data);
        
        return redirect(route('Publication.index'));
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
    public function edit(Publication $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $post)
    {
        //
    }
}
