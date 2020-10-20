<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pageTitle = 'Home Page';
        $showFooter = true;
        $pageData = 'Lorem Ipsum';
        $theme = 'dark';
        return view('home',compact('pageTitle','showFooter','pageData','theme'));
    }

    public function about()
    {
        $pageTitle = 'About Page';
        $showFooter = true;
        $pageData = 'Lorem Ipsum';
        $theme = 'light';
        return view('about',compact('pageTitle','showFooter','pageData','theme'));
    }

    public function contact()
    {
        
        $showFooter = false;
        $pageData = 'Lorem Ipsum';
        $theme = 'dark';
        return view('contact',compact('showFooter','pageData','theme'));
    }
}
