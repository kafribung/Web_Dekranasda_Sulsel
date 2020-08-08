<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\CommentBlog;

class CommentBlogController extends Controller
{
    // READ
    public function index()
    {
        $comments = CommentBlog::with('blog')->orderBy('id', 'desc')->get();
        return view('dashboard.commentBlog', compact('comments'));
    }
    // CREATE
    public function create()
    {
        //
    }

    // STORE
    public function store(Request $request)
    {
        //
    }

    // SHOW
    public function show($id)
    {
        //
    }

    // EDIT
    public function edit($id)
    {
        $comment = CommentBlog::findOrFail($id);
        return view('dashboard_edit.commentBlog_edit', compact('comment'));
    }

    // UPDATE
    public function update(CommentRequest $request, $id)
    {
        $data = $request->all();
        CommentBlog::findOrFail($id)->update($data);
        return redirect('/comment-blog')->with('msg', 'Data Komentar Blog Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        CommentBlog::destroy($id);
        return redirect('/comment-blog')->with('msg', 'Data Komentar Blog Berhasil dihapus');
    }
}
