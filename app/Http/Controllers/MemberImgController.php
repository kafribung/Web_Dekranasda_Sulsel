<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import Class MemberImgRequest
use App\Http\Requests\MemberImgRequest;
// Import DB members
use App\Models\Member;
// Import DB membersImg
use App\Models\MemberImg;

class MemberImgController extends Controller
{
    // READ
    public function index()
    {
        //
    }

    // CREATE
    public function create($slug)
    {

        $member = Member::with('membersImgs')->where('slug', $slug)->first();

        if (!$member->isOwner()) {
            return redirect('/member-img/'. $member->slug)->with('msg', 'Anda tidak memiliki akses');
        }
        
        return view('dashboard_create.member_img_create', compact('member'));
    }

    // STORE
    public function store(MemberImgRequest $request, $id)
    {
        $model = Member::findOrFail($id);

        $data = $request->all();

        if (MemberImg::where('user_id', $id)->count() >= 3) {
            return redirect('/member-img/'. $model->slug)->with('msg', 'Data Galeri Max 3');
        }

        if ($request->has('img')) {
            $img = $request->file('img');
            $name= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_members'), $name);

            $data['img'] =  $name;
        }

        $data['member_id'] = $id;

        $request->user()->membersImgs()->create($data);

        return redirect('/member-img/'. $model->slug)->with('msg', 'Data Galeri Anggota Berhasil ditambahkan');
    }

    // SHOW
    public function show($slug)
    {
        $member = Member::with('membersImgs')->where('slug', $slug)->first();

        return view('dashboard.member_img', compact('member'));
    }

    // EDIT
    public function edit($id)
    {
        $memberImg = MemberImg::findOrFail($id);

        if (!$memberImg->isOwner()) {
            return redirect('/member-img/'. $memberImg->member->slug)->with('msg', 'Anda tidak memiliki akses');
        }

        return view('dashboard_edit.member_img_edit', compact('memberImg'));
    }

    // UPDATE
    public function update(MemberImgRequest $request, $id)
    {

        $data = $request->all();

        if ($request->has('img')) {
            $img = $request->file('img');
            $name= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_members'), $name);

            $data['img'] =  $name;
        }

        $model = MemberImg::findOrFail($id)->update($data);

        return redirect('/member-img/'. $model->slug)->with('msg', 'Data Galeri Anggota Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        $model = MemberImg::destroy($id);

        return redirect('/member-img/'. $model->member->slug)->with('msg', 'Data Galeri Anggota Berhasil ditambahkan');
    }
}
