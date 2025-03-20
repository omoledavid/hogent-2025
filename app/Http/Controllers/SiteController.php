<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController extends Controller
{
    public function home(): View
    {
        $pageName = 'Home';
        $posts = Post::query()->with(['categories', 'user'])
            ->published()
            ->paginate(20);
        return view('home', compact('pageName', 'posts'));
    }

    public function listing(): View
    {
        $pageName = 'Listing';
        return view('pages.listing', compact('pageName'));
    }
    public function agents(): View
    {
        $pageName = 'Agents';
        return view('pages.agents', compact('pageName'));
    }
    public function contact(): View
    {
        $pageName = 'Contact';
        return view('pages.contact', compact('pageName'));
    }

    public function about(): View
    {
        $pageName = 'About';
        return view('pages.about', compact('pageName'));
    }
}
