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

    public function platform()
    {
        return view('frontend.platform');
    }
    public function investment()
    {
        return view('frontend.investment');
    }
    public function turnkey()
    {
        return view('frontend.turnkey');
    }
    public function service()
    {
        return view('frontend.service');
    }
    public function financial()
    {
        return view('frontend.financial');
    }
    public function market()
    {
        return view('frontend.market');
    }
    public function news()
    {
        return view('frontend.news');
    }

    public function testimonial()
    {
        return view('frontend.testimonial');
    }
    public function press()
    {
        return view('frontend.press');
    }
    public function demo()
    {
        return view('frontend.demo');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }
    public function terms()
    {
        return view('frontend.terms');
    }
}
