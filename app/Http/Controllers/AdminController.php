<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Class AdminRequest
use App\Http\Requests\AdminRequest; 
// Import Class Hash
use Illuminate\Support\Facades\Hash;

// Import DB Admin
use App\Models\User;

class AdminController extends Controller
{
    // READ
    public function index()
    {
        $admins = User::where('role', 1)->latest()->get();

        return view('dashboard.admin', compact('admins'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.admin_create');
    }

    //
    public function store(AdminRequest $request)
    {
        $data = $request->all();

        if ($request->has('img')) {
            $img = $request->file('img');
            $name= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_users'), $name);

            $data['img'] = $name;
        }

        $data['password'] = Hash::make($request->password);
        $data['role']     = 1;

        User::create($data);

        return redirect('/admin')->with('msg', 'Data admin berhasil ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($email)
    {
        $admin = User::where('email', $email)->first();

        return view('dashboard_edit.admin_edit', compact('admin'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'img'      => ['mimes:png,jpg,jpeg'],
            'name'     => ['required', 'string', 'min:3', 'max:20'],
            'email'    => ['required', 'email', 'string',],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if ($request->has('img')) {
            $img = $request->file('img');
            $name= time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_users'), $name);

            $data['img'] = $name;
        }

        $data['password'] = Hash::make($request->password);

        User::findOrFail($id)->update($data);

        return redirect('/admin')->with('msg', 'Data admin berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        if (User::count() == 1) {
            return redirect('/admin')->with('msg', 'Data admin tidak boleh kosong');
        }

        User::destroy($id);

        return redirect('/admin')->with('msg', 'Data admin berhasil diedit');
    }
}
