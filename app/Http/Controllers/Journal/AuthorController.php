<?php

namespace App\Http\Controllers\Journal;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Journal\Journals;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Journal\Journal_status;
use App\Models\JournalpaperfilesModel;

class AuthorController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:author-list|author-create|author-edit|author-delete|author-viewpaper', ['only' => ['index','store']]);
         $this->middleware('permission:author-create', ['only' => ['create','store']]);
         $this->middleware('permission:author-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:author-delete', ['only' => ['destroy']]);
         $this->middleware('permission:author-viewpaper', ['only' => ['viewpaper']]);
    }



    public function index(Request $request)
    {

        $data = User::whereHas('roles', function($q){ $q->where('name', '=','Author'); })->get();

        return view('journalauthors.index',compact('data'))
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

        $user = User::find($id);
        $journals = Journals::where('user_id',$id)
        ->leftjoin('journalpaperfiles','journalpaperfiles.journalid','=','journals.id')
        ->leftjoin('journal_categories','journal_categories.id','=','journals.categoryid')
        ->leftjoin('journal_status','journal_status.journal_id','=','journals.id')
        ->orderBy('updated_at', 'desc')
        ->get(['journals.id as jid','journals.title as title','journals.status as status','journalpaperfiles.journal as journal',
               'journal_categories.journal_category as category','journalpaperfiles.paperid as paperid',
               'journal_status.Pending as pending','journal_status.review as review','journal_status.rejected as rejected',
               'journal_status.accepted as accepted','journal_status.Published as published',
               'journals.updated_at as updated_at']);

        $published = Journal_status::where('author_id',$id)->where('Published','=','on')->count();


        return view('journalauthors.journallists',compact('user'))
                    ->with('journals', $journals)
                    ->with('published',$published);
    }


    /**
     * Display the specified resource.
     */
    public function showreview(string $id)
    {
        $user = User::find($id);
        return view('journalauthors.journalreview',compact('user'));
    }




    /**
     * Display the specified resource.
     */
    public function showjournal(string $id)
    {
        $userid = journals::where('id',$id)->pluck('user_id')->first();
        $user = User::find($userid);

        $journals = Journals::where('journals.id',$id)
        ->leftjoin('journalpaperfiles','journalpaperfiles.journalid','=','journals.id')
        ->leftjoin('journal_categories','journal_categories.id','=','journals.categoryid')
        ->leftjoin('journal_status','journal_status.journal_id','=','journals.id')
        ->orderBy('updated_at', 'desc')
        ->get(['journals.id as jid','journals.title as title','journals.abtract as abtract','journals.status as status',
               'journalpaperfiles.journal as journal',
               'journal_categories.journal_category as category','journalpaperfiles.paperid as paperid',
               'journal_status.Pending as pending','journal_status.review as review','journal_status.rejected as rejected',
               'journal_status.accepted as accepted','journal_status.Published as published','journals.updated_at as updated_at']);


        $published = Journal_status::where('author_id',$userid)->where('Published','=','on')->count();


        return view('journalauthors.journal',compact('user'))
                                            ->with('journals',$journals)
                                            ->with('published',$published);
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
