<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page($title)
    {
        $title = strtolower($title);
        if ($title == "terms") {
            return view('pages.terms');
        } elseif ($title == "privacy") {
            return view('pages.privacy');
        } elseif ($title == "about" or $title == "aboutus") {
            return view('pages.about');
        } elseif ($title == "guide" or $title == "using") {
            return view('pages.guide');
        } else {
            abort(404);
        }
    }
}
