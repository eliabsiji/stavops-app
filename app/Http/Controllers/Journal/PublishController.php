<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\Journal\Journal_status;
use Illuminate\Http\Request;

class PublishController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:publish-list|publish-create|publish-edit|publish-delete', ['only' => ['index','store']]);
         $this->middleware('permission:publish-create', ['only' => ['create','store']]);
         $this->middleware('permission:publish-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:publish-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //logic for publishing journals
       $pending = "";
       $underreview = "";
       $rejected = "";
       $accepted = "";
       $published = "";

       if ($request->pending == "on") {
        Journal_status::where('journal_id', $request->journalid)
        ->update([
            'Pending' => $request->pending,
            'review' => "",
            'rejected'=> "",
            'accepted'=>"",
            'published'=>""
         ]);
         return redirect()->back()->with('success', ' Journal status is now Pending.');
       }
        if ($request->underreview == "on") {
        Journal_status::where('journal_id', $request->journalid)
        ->update([
            'Pending' => "",
            'review' => $request->underreview,
            'rejected'=> "",
            'accepted'=>"",
            'published'=>""
         ]);
         return redirect()->back()->with('success', ' Journal status is now Under Review.');
       }
       if ($request->rejected == "on") {
        Journal_status::where('journal_id', $request->journalid)
        ->update([
            'Pending' => "",
            'review' => "",
            'rejected'=> $request->rejected,
            'accepted'=>"",
            'published'=>""

         ]);
         return redirect()->back()->with('success', ' Journal status is Rejected.');
       }
      if ($request->accepted == "on") {
        Journal_status::where('journal_id', $request->journalid)
        ->update([
            'Pending' => "",
            'review' => "",
            'rejected'=> "",
            'accepted'=>$request->accepted,
            'published'=>""
         ]);
         return redirect()->back()->with('success', ' Journal status is now Accepted.');
       }
       if ($request->published == "on") {
        Journal_status::where('journal_id', $request->journalid)
        ->update([
            'Pending' => "",
            'review' =>"",
            'rejected'=> "",
            'accepted'=>"",
            'published'=>$request->published
         ]);
         return redirect()->back()->with('success', ' Journal status is now Published.');
       }




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
