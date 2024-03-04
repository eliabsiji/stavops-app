<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
Use App\Models\Journal\Journal_category;
use App\Models\Journal\Journals;

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
                 ->leftJoin('journal_categories', 'journal_categories.id','=','journals.categoryid')
                 -> leftJoin('journalpaperfiles', 'journalpaperfiles.journalid','=','journals.id')
                 ->get(['journals.title as title','journal_categories.journal_category as category']);

            return view('website.journal_category')->with('journals',$journals)
                                                            ->with('jcat',$jcat);
    }

    public function editors(){

        return view('website.editors');
    }

    public function submission(){

        return view('website.submission');
    }


}
