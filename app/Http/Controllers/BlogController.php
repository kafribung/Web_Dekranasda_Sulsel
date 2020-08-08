<?php

namespace App\Http\Controllers;

// Import BlogRequest
use App\Http\Requests\BlogRequest;
// Import Class STR
use Illuminate\Support\Str;
// Import Model blog
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // READ
    public function index()
    {
        $blogs =  Blog::with('user', 'comments')->latest()->get();
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
            $data['img'] = $request->file('img')->storeAs('img_blogs', time() . '.' . $img->getClientOriginalExtension());
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
        $this->authorize('isOwner', $blog);
        return view('dashboard_edit.blog_edit', compact('blog'));
    }

    // UPDATE
    public function update(BlogRequest $request, $id)
    {
        $data = $request->all();
        $blog = Blog::findOrFail($id);
        if ($img = $request->file('img')) {
            Storage::delete($blog->img);
            $data['img'] = $request->file('img')->storeAs('img_blogs', time() . '.' . $img->getClientOriginalExtension());
        }
        $data['slug'] = Str::slug($request->name);
        $blog->update($data);
        return redirect('/blog')->with('msg', 'Data Blog Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $this->authorize('isOwner', $blog);
        Storage::delete($blog->img);
        Blog::destroy($id);
        return redirect('/blog')->with('msg', 'Data Blog Berhasil dihapus');
    }
}
