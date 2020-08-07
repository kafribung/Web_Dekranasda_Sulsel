<?php

namespace App\Http\Controllers;

// Import Class AdminRequest
use App\Http\Requests\AdminRequest;
// Import Class Hash
use Illuminate\Support\Facades\Hash;

// Import DB Admin
use App\Models\User;
use Illuminate\Support\Facades\Storage;

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

        if ($img = $request->file('img')) {
            $data['img'] = $request->file('img')->storeAs('img_users', time() . '.' . $img->getClientOriginalExtension());
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
    public function update(AdminRequest $request, $id)
    {
        $data = $request->all();
        $admin = User::findOrFail($id);
        // Cek Request IMG
        if ($img = $request->file('img')) {
            // Jgn Hapus Default User
            if ($admin->img != 'img_users/default_profile.jpg') {
                Storage::delete($admin->img);
            }
            $data['img'] = $request->file('img')->storeAs('img_users', time() . '.' . $img->getClientOriginalExtension());
        }
        $data['password'] = Hash::make($request->password);
        $admin->update($data);
        return redirect('/admin')->with('msg', 'Data admin berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        if (User::where('role', 1)->count() == 1) {
            return redirect('/admin')->with('msg', 'Data admin tidak boleh kosong');
        }

        $admin = User::findOrFail($id);
        if ($admin->img != 'img_users/default_profile.jpg') {
            Storage::delete($admin->img);
        }
        User::destroy($id);
        return redirect('/admin')->with('msg', 'Data admin berhasil dihapus');
    }
}
