<?php

namespace App\Http\Controllers\OutsidePartController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartController extends Controller
{
    /**
     * The functions displays the pages Home
     */
    public function index()
    {
        return view('Page.index');
    }

    /**
     * The functions displays the pages About
     */
    public function about()
    {
        return view('Page.about');
    }

    /**
     * The functions displays the pages Services
     */
    public function services()
    {
        return view('Page.services');
    }

    /**
     * The functions displays the pages Blog
     */
    public function blog()
    {
        return view('Page.blog');
    }

    /**
     * The functions displays the pages Contact
     */
    public function contact()
    {
        return view('Page.contact');
    }


}
