<?php

namespace App\Http\Controllers;

// Import Class MemberImgRequest
use App\Http\Requests\MemberImgRequest;
// Import DB membersImg DB members
use App\Models\{Member, MemberImg};
use Illuminate\Support\Facades\Storage;

class MemberImgController extends Controller
{
    // CREATE
    public function create($slug)
    {
        $member = Member::with('membersImgs')->where('slug', $slug)->first();
        $this->authorize('isOwner', $member);
        return view('dashboard_create.member_img_create', compact('member'));
    }

    // STORE
    public function store(MemberImgRequest $request, $id)
    {
        $model = Member::findOrFail($id);
        $data = $request->all();
        // Max 3 Foto
        if (MemberImg::where('member_id', $id)->count() >= 3) {
            return redirect('/member-img/' . $model->slug)->with('msg', 'Data Galeri Max 3');
        }
        // Img Store
        if ($request->has('img')) {
            $img = $request->file('img');
            $data['img'] =  $request->file('img')->storeAs('img_members', time() . '.' . $img->getClientOriginalExtension());
        }
        $data['member_id'] = $id;
        $request->user()->membersImgs()->create($data);
        return redirect('/member-img/' . $model->slug)->with('msg', 'Data Galeri Anggota Berhasil ditambahkan');
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
        $this->authorize('isOwner', $memberImg);
        return view('dashboard_edit.member_img_edit', compact('memberImg'));
    }

    // UPDATE
    public function update(MemberImgRequest $request, $id)
    {
        $data = $request->all();
        $model = MemberImg::findOrFail($id);
        // Img Store
        if ($request->has('img')) {
            Storage::delete($model->img);
            $img = $request->file('img');
            $data['img'] =  $request->file('img')->storeAs('img_members', time() . '.' . $img->getClientOriginalExtension());
        }
        $model->update($data);
        return redirect('/member-img/' . $model->member->slug)->with('msg', 'Data Galeri Anggota Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        $model = MemberImg::findOrFail($id);
        $this->authorize('isOwner', $model);
        Storage::delete($model->img);
        MemberImg::destroy($id);
        return redirect('/member-img/' . $model->member->slug)->with('msg', 'Data Galeri Anggota Berhasil dihapus');
    }
}
