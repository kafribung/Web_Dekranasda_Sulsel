<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;


// Import Model Comment
use App\Models\CommentActivity;

class CommentActivityController extends Controller
{
    // READ
    public function index()
    {
        $comments = CommentActivity::with('activity')->orderBy('id', 'desc')->get();

        return view('dashboard.commentActivity', compact('comments'));
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
        $comment = CommentActivity::findOrFail($id);

        return view('dashboard_edit.commentActivity_edit', compact('comment'));
    }

    // UPDATE
    public function update(CommentRequest $request, $id)
    {
        $data = $request->all();

        CommentActivity::findOrFail($id)->update($data);

        return redirect('/comment-activity')->with('msg', 'Data Komentar Berhasil diedit');
    }

    // DELETE
    public function destroy($id)
    {
        CommentActivity::destroy($id);

        return redirect('/comment-activity')->with('msg', 'Data Komentar Berhasil dihapus');
    }
}
