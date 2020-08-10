<?php

namespace App\Http\Controllers;
// Import User yg login
use Auth;

use App\Models\{User, Activity, Member, Product, Blog};

class DashboardController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $admin = User::where('role', 1)->count();
        $member = Member::count();
        $product = Product::count();
        $activity = Activity::count();
        $blog   = Blog::count();
        return view('dashboard/dashboard', compact('user', 'admin', 'member', 'product', 'activity', 'blog'));
    }
}
