<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Journal\Journal_status;
use App\Models\Journal\Journals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OverviewController extends Controller
{
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {



        $user = User::find($id);
        $userroles = $user->roles->all();
        $userbio = $user->bio;

        $userid = Auth::user()->id;
        $published = Journal_status::where('author_id','=',$userid)->where('Published','=','on')->count();
        $journals = Journals::where('user_id','=',$userid)->count();
        return view('users.overview',
                          compact('user'),
                      compact('userroles'))
                           ->with("userbio",$userbio)
                           ->with("journals",$journals)
                           ->with("published",$published);

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
