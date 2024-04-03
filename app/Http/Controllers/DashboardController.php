<?php

namespace App\Http\Controllers;

use App\Models\Journal\AuthorModel;
use App\Models\Journal\Journals;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Journal\Journal_status;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DashboardController extends Controller
{

    function __construct()
    {
         $this->middleware('permission:dashboard-list|userdashboard-list', ['only' => ['index','store']]);
        //  $this->middleware('permission:user-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     *
     */



    public function index()
    {
        if(auth()->user()->can('dashboard-list')){
            $user = User::count();
            $journals  = Journals::count();
            $authors = User::whereHas('roles', function($q){ $q->where('name', '=','Author'); })->count();
            $published = Journal_status::where('Published','=','on')->count();
            $rejected = Journal_status::where('rejected','=','on')->count();
            $review = Journal_status::where('review','=','on')->count();
            return view('dashboard')->with('users',$user)
                                          ->with('journals',$journals)
                                          ->with('authors',$authors)
                                          ->with('published',$published)
                                          ->with('review',$review)
                                          ->with('rejected',$rejected);
        }else{

            return view('userdashboard');
        }


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
}
