<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Import BlogRequest
use App\Http\Requests\BlogRequest;
// Import Class STR
use Illuminate\Support\Str;
// Import Model blog
use App\Models\Blog;

class BlogController extends Controller
{
    // READ
    public function index()
    {
        $blogs =  Blog::with('user')->latest()->get();

        return view('dashboard.blog', compact('blogs'));
    }

    // CREATE
    public function create()
    {
        return view('dashboard_create.blog_create');
    }

    // STORE
    public function store(BlogRequest $request)
    {
        $data = $request->all();

        if ($img = $request->file('img')) {
            $name = time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_blogs'), $name);

            $data['img'] = $name;
        }

        $data['slug'] = Str::slug($request->name);

        $request->user()->blogs()->create($data);

        return redirect('/blog')->with('msg', 'Data Blog Berhasil ditambahkan');
    }

    // SHOW
    public function show($id)
    {
        return abort('404');
    }

    // EDIT
    public function edit($slug)
    {
        $blog =  Blog::with('user')->where('slug', $slug)->first();

        return view('dashboard_edit.blog_edit', compact('blog'));
    }

    // UPDATE
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();

        if ($img = $request->file('img')) {
            $name = time(). '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img_blogs'), $name);

            $data['img'] = $name;
        }

        $data['slug'] = Str::slug($request->name);

        Blog::findOrFail($id)->update($data);

        return redirect('/blog')->with('msg','Data Blog Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Blog::destroy($id);

        return redirect('/blog')->with('msg','Data Blog Berhasil dihapus');
    }

}
