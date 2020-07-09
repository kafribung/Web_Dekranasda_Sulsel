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

        return redirect('/activity')->with('Data Kegiatan Berhasil ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($id)
    {
        return view('dashboard_edit.activity_edit');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
