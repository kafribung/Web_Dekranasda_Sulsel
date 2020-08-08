<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Http\Requests\CommentRequest;
use App\Models\CommentActivity;



class KegiatanController extends Controller
{
    public function index()
    {
        $activities = Activity::with('user', 'comments')->orderBy('id', 'desc')->paginate(6);
        return view('pages.kegiatan', compact('activities'));
    }

    public function show(Activity $activity)
    {
        return view('pages.kegiatan_singel', compact('activity'));
    }

    // Komentar
    public function store(CommentRequest $request, $id)
    {
        $data = $request->all();
        $data['activity_id'] = $id;
        CommentActivity::create($data);
        return redirect()->back()->with('msg', 'Komentar Berhasil ditambahkan');
    }
}
