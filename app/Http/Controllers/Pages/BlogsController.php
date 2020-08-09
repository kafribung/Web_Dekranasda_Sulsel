<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\{Blog, CommentBlog};

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user', 'comments')->orderBy('id', 'desc')->paginate(6);
        return view('pages.blogs', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('pages.blogs_single', compact('blog'));
    }

    // Komentar
    public function store(CommentRequest $request, $id)
    {
        $data = $request->all();
        $data['blog_id'] = $id;
        CommentBlog::create($data);
        return redirect()->back()->with('msg', 'Komentar Berhasil ditambahkan');
    }
}
