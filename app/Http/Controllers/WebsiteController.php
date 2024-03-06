<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use App\Models\Journal\Journal_category;
use App\Models\Journal\Journals;
use App\Models\JournalpaperfilesModel;

class WebsiteController extends Controller
{

    public function index(){

        return view('website.home');
    }

    public function conference(){

        return view('website.conference');
    }

    public function contact(){

        return view('website.contact');
    }

    public function mission(){

        return view('website.missionvission');
    }

    public function journals(){

        $journals = Journal_category::all();

        return view('website.journals')->with('journals',$journals);
    }


    public function journalcategory($id){
        $jcat = Journal_category::find($id);

        $journals = Journals::where('journals.categoryid',$id)
                 ->leftjoin('users','users.id','=','journals.user_id')
                 ->leftJoin('journal_categories', 'journal_categories.id','=','journals.categoryid')
                 -> leftJoin('journalpaperfiles', 'journalpaperfiles.journalid','=','journals.id')
                 ->get(['journals.title as title','journal_categories.journal_category as category','users.name as author',
                        'journalpaperfiles.paperid as paperid']);

            return view('website.journal_category')->with('journals',$journals)
                                                            ->with('jcat',$jcat);
    }

    public function editors(){

        return view('website.editors');
    }

    public function submission(){

        return view('website.submission');
    }


    public function viewpaper($id){


        $user = auth()->user();
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
