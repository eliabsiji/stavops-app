<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view('website.journals');
    }

    public function editors(){

        return view('website.editors');
    }

    public function submission(){

        return view('website.submission');
    }
}
