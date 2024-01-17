<?php

namespace App\Http\Controllers\Apps;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Journal\Journal_category;
use App\Models\Journal\Journals;
use App\Models\JournalpaperfilesModel;
use App\Models\Pictures\ImageModel;
use Illuminate\Support\Facades\Auth;

class MyJournalsController extends Controller
{


    function __construct()
    {
         $this->middleware('permission:myjournals-list|myjournals-create|myjournals-edit|myjournals-delete|deletejournal|myjournals-viewpaper', ['only' => ['index','store']]);
         $this->middleware('permission:myjournals-create', ['only' => ['create','store']]);
         $this->middleware('permission:myjournals-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:myjournals-delete', ['only' => ['destroy','deletejournal']]);
         $this->middleware('permission:myjournals-viewpaper', ['only' => ['viewpaper']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $category = Journal_category::all();

        $journals = Journals::where('user_id',$user->id)
                            ->leftjoin('journalpaperfiles','journalpaperfiles.journalid','=','journals.id')
                            ->leftjoin('journal_categories','journal_categories.id','=','journals.categoryid')
                            ->orderBy('updated_at', 'desc')
                            ->get(['journals.id as jid','journals.title as title','journals.status as status','journalpaperfiles.journal as journal',
                                   'journal_categories.journal_category as category','journalpaperfiles.paperid as paperid',
                                   'journals.updated_at as updated_at']);

        return view('myjournal.index')->with('category',$category)
                                            ->with('journals',$journals);
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

      $j = new  Journals();
      $request->validate(['journalfile' => 'required|file|mimes:pdf|max:2048', ]);
      $fileName = time().'.'.$request->journalfile->extension();
      $request->journalfile->move(public_path('journals'), $fileName);
      $j->user_id = Auth::user()->id;
      $j->title  = $request->title;
      $j->categoryid = $request->categoryid;
      $j->save();
      $journalid = $j->id;

     $jp = new JournalpaperfilesModel();
     $jp->journal = $fileName;
     $jp->journalid = $journalid;
     $jp->paperid = $this->paperid($j->id);
     $jp->save();
     return redirect()->back()->with('success', ' Journal Submitted Successfully.');
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

    public function paperid($num){

        $id = $num;
        $user_id = $id; //user id
        $id_lenth=strlen($id);
        $stamp = mt_rand(2,100);
        $random_id_length = 1-$id_lenth;
        $paymentreferenceno = hexdec(uniqid(rand(),1));
        $paymentreferenceno = strip_tags(stripslashes($paymentreferenceno));
        $paymentreferenceno = str_replace(".","",$paymentreferenceno);
        $paymentreferenceno = str_replace("E", "$stamp", $paymentreferenceno);
        $paymentreferenceno = str_replace("+", "9", $paymentreferenceno);
        $paymentreferenceno = strrev(str_replace("/","",$paymentreferenceno));
        $paymentreferenceno = substr($paymentreferenceno,0,$random_id_length);
        $paymentreference_no = $paymentreferenceno.$id; //payment reference no
        return md5($paymentreference_no);
    }

    public function viewpaper(){

    }

    public function deletejournal(Request $request)
    {

       Journals::find($request->jornalid)->delete();
       JournalpaperfilesModel::where('journalid',$request->jornalid)->delete();
       //check data deleted or not
        if ($request->journalid) {
            $success = true;
            $message = "Jornal has been removed";
        } else {
            $success = true;
            $message = "Jornal  not found";
        }
        //  return response
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);

    }
}