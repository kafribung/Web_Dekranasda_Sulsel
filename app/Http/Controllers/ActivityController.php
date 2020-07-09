<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import ActivityRequest
use App\Http\Requests\ActivityRequest;
// Import Class STR
use Illuminate\Support\Str;
// Import Model Activity
use App\Models\Activity;

class ActivityController extends Controller
{
    // READ
    public function index()
    {
        $activities =  Activity::with('user')->latest()->get();

        return view('dashboard.activity', compact('activities'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.activity_create');
    }

    // STORE
    public function store(ActivityRequest $request)
    {
        $data = $request->all();

        if ($img = $request->file('img')) {
            $name = time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_activity'), $name);

            $data['img'] = $name;
        }

        $data['slug'] = Str::slug($request->name);

        $request->user()->activities()->create($data);

        return redirect('/activity')->with('msg', 'Data Kegiatan Berhasil ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($slug)
    {
        $activity =  Activity::with('user')->where('slug', $slug)->first();

        return view('dashboard_edit.activity_edit', compact('activity'));
    }

    // UPDATE
    public function update(ActivityRequest $request, $id)
    {
        $data = $request->all();

        if ($img = $request->file('img')) {
            $name = time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_activity'), $name);

            $data['img'] = $name;
        }

        $data['slug'] = Str::slug($request->name);

        Activity::findOrFail($id)->update($data);

        return redirect('/activity')->with('msg','Data Kegiatan Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Activity::destroy($id);

        return redirect('/activity')->with('msg','Data Kegiatan Berhasil dihapus');
    }

}
