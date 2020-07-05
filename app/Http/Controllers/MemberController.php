<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Impoer Class MemberRequest
use App\Http\Requests\MemberRequest;
// Import Class STR
use Illuminate\Support\Str;

// Import DB members
use App\Models\Member;

class MemberController extends Controller
{
    // READ
    public function index()
    {
        $members = Member::with('user')->latest()->get();

        return view('dashboard.member', compact('members'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.member_create');
    }

    // STORE
    public function store(MemberRequest $request)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        $request->user()->members()->create($data);

        return redirect('/member')->with('msg', 'Data anggota berhasil ditambhakan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($slug)
    {
        $member = Member::where('slug', $slug)->first();

        if (!$member->isOwner()) {
            return redirect('/member')->with('msg', 'Anda tidak memiliki akses');
        }

        return view('dashboard_edit.member_edit', compact('member'));
    }

    // UPDATE
    public function update(MemberRequest $request, $id)
    {
        $data = $request->all();

        $data['slug'] = Str::slug($request->name);

        Member::findOrFail($id)->update($data);

        return redirect('/member')->with('msg', 'Data anggota berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Member::destroy($id);

        return redirect('/member')->with('msg', 'Data anggota berhasil dihapus');
    }
}
