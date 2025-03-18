<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        $pageName = 'Home';
        return view('home', compact('pageName'));
    }

    public function listing(): View
    {
        $pageName = 'Listing';
        return view('listing', compact('pageName'));
    }
    public function agents(): View
    {
        $pageName = 'Agents';
        return view('agents', compact('pageName'));
    }
    public function blog(): View
    {
        $pageName = 'Blog';
        return view('blog', compact('pageName'));
    }
    public function contact(): View
    {
        $pageName = 'Contact';
        return view('contact', compact('pageName'));
    }

    public function about(): View
    {
        $pageName = 'About';
        return view('about', compact('pageName'));
    }
}
