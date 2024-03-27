<?php

namespace App\Http\Controllers\Journal;

use Illuminate\Http\Request;
use App\Models\Journal\Journals;
use App\Http\Controllers\Controller;
use App\Models\JournalpaperfilesModel;

class JournalController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:alljournals-list|alljournals-create|alljournals-edit|alljournals-delete|alljournals-viewpaper', ['only' => ['index','store']]);
         $this->middleware('permission:alljournals-create', ['only' => ['create','store']]);
         $this->middleware('permission:alljournals-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:alljournals-delete', ['only' => ['destroy']]);
         $this->middleware('permission:alljournals-viewpaper', ['only' => ['viewpaper']]);
    }



    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $journals = Journals::leftjoin('users','users.id','journals.user_id')
        ->leftjoin('journalpaperfiles','journalpaperfiles.journalid','=','journals.id')
        ->leftjoin('journal_categories','journal_categories.id','=','journals.categoryid')
        ->leftjoin('journal_status','journal_status.journal_id','=','journals.id')
        ->orderBy('updated_at', 'desc')
        ->get(['journals.id as jid','journals.title as title','journals.status as status','journalpaperfiles.journal as journal',
               'journal_categories.journal_category as category','journalpaperfiles.paperid as paperid',
               'journal_status.Pending as pending','journal_status.review as review','journal_status.rejected as rejected',
               'journal_status.accepted as accepted','journal_status.Published as published','users.name as name','users.avatar as avatar',
               'journals.updated_at as updated_at']);

        return view('journalauthors.alljournals')->with('data',$journals)
        ->with('i', ($request->input('page', 1) - 1) * 5);

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
        //
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

    public function viewpaper($id){



        $journals = JournalpaperfilesModel::where('paperid',$id)->first();

       // echo $journals->journal;
        $file = public_path('journals/'.$journals->journal);

        if (file_exists($file)) {
            $headers = ['Content-Type' => 'application/pdf'];
            return response()->download($file, 'Test File', $headers, 'inline');
        } else {
            abort(404, 'File not found!');
        }


    }
}
