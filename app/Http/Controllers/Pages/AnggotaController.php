<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Member;

class AnggotaController extends Controller
{
    public function index()
    {
        $members = Member::with('user', 'products')->orderBy('id', 'desc')->paginate(8);
        return view('pages.anggota', compact('members'));
    }

    public function show(Member $member)
    {
        $members = Member::inRandomOrder()->limit(4)->get();
        return view('pages.anggota_single', compact('member', 'members'));
    }
}
