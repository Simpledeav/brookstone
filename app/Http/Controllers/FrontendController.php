<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function advisor()
    {
        return view('frontend.advisor');
    }

    public function solution()
    {
        return view('frontend.solution');
    }

    public function traning()
    {
        return view('frontend.traning');
    }
}
