<?php

namespace App\Http\Controllers\Pages;

use App\Models\{Activity, Blog};
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $activities = Activity::with('user', 'comments')->orderBy('id', 'desc')->limit(3)->get();
        $blogs = Blog::with('user', 'comments')->orderBy('id', 'desc')->limit(3)->get();
        return view('pages.home', compact('activities', 'blogs'));
    }
}
