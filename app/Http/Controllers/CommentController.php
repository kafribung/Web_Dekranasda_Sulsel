<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;


// Import Model Comment
use App\Models\Comment;

class CommentController extends Controller
{
    // READ
    public function index()
    {
        $comments = Comment::with('activity')->orderBy('id', 'desc')->get();

        return view('dashboard.comment', compact('comments'));
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
        $comment = Comment::findOrFail($id);

        return view('dashboard_edit.comment_edit', compact('comment'));
    }

    // UPDATE
    public function update(CommentRequest $request, $id)
    {
        $data = $request->all();

        Comment::findOrFail($id)->update($data);

        return redirect('/comment-activity')->with('msg', 'Data Komentar Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        Comment::destroy($id);

        return redirect('/comment-activity')->with('msg', 'Data Komentar Berhasil dihapus');
    }
}
