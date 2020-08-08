<?php

namespace App\Http\Controllers;

// Impoer Class MemberRequest
use App\Http\Requests\MemberRequest;
// Import Class STR
use Illuminate\Support\Str;
// Import DB members
use App\Models\Member;
use Illuminate\Support\Facades\Storage;

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
        if ($img = $request->file('img')) {
            $data['img'] = $request->file('img')->storeAs('img_members', time() . '.' . $img->getClientOriginalExtension());
        }
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
        $this->authorize('isOwner', $member);
        return view('dashboard_edit.member_edit', compact('member'));
    }

    // UPDATE
    public function update(MemberRequest $request, $id)
    {
        $data = $request->all();
        $member = Member::findOrFail($id);
        if ($img = $request->file('img')) {
            Storage::delete($member->img);
            $data['img'] = $request->file('img')->storeAs('img_members', time() . '.' . $img->getClientOriginalExtension());
        }
        $data['slug'] = Str::slug($request->name);
        $member->update($data);
        return redirect('/member')->with('msg', 'Data anggota berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        $member = Member::findOrFail($id);
        Storage::delete($member->img);
        $this->authorize('isOwner', $member);
        Member::destroy($id);
        return redirect('/member')->with('msg', 'Data anggota berhasil dihapus');
    }
}
