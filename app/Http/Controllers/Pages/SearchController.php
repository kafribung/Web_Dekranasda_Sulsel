<?php

namespace App\Http\Controllers\Pages;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search   = urldecode($request->input('search'));
        $products  = Product::search($search)->get();
        return view('pages.search', compact('products'));
    }
}
