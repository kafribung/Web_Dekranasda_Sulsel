<?php

namespace App\Http\Controllers;

// Import ActivityRequest
use App\Http\Requests\ActivityRequest;
// Import Class STR
use Illuminate\Support\Str;
// Import Model Activity
use App\Models\Activity;
use Illuminate\Support\Facades\Storage;

class ActivityController extends Controller
{
    // READ
    public function index()
    {
        $activities =  Activity::with('user', 'comments')->latest()->get();
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
            $data['img'] = $request->file('img')->storeAs('img_activities', time() . '.' . $img->getClientOriginalExtension());
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
        $this->authorize('isOwner', $activity);
        return view('dashboard_edit.activity_edit', compact('activity'));
    }

    // UPDATE
    public function update(ActivityRequest $request, $id)
    {
        $data = $request->all();
        $activity = Activity::findOrFail($id);
        if ($img = $request->file('img')) {
            if ($activity->img != 'img_activities/default_activity.jpeg') {
                Storage::delete($activity->img);
            }
            $data['img'] = $request->file('img')->storeAs('img_activities', time() . '.' . $img->getClientOriginalExtension());
        }
        $data['slug'] = Str::slug($request->name);
        $activity->update($data);
        return redirect('/activity')->with('msg', 'Data Kegiatan Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $this->authorize('isOwner', $activity);
        if ($activity->img != 'img_activities/default_activity.jpeg') {
            Storage::delete($activity->img);
        }
        Activity::destroy($id);
        return redirect('/activity')->with('msg', 'Data Kegiatan Berhasil dihapus');
    }
}
