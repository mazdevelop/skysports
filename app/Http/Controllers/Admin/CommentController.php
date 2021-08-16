<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments= Comment::with('post')->orderBy('created_at','desc')->paginate(30);

        return view('admin.comments.index',compact(['comments']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::with('post')->where('id',$id)->first();
        return view('admin.comments.edit',compact(['comment']));
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
        $comment = Comment::findOrFail($id);
        $comment->description = $request->input('description');
        $comment->status = $request->input('status');
        $comment->save();
        Session::flash('update_comment','نظر با موفقیت ویرایش شد');
        return redirect('/admin/comment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        Session::flash('delete_comment','نظر  با موفقیت حذف شد');
        return redirect('/admin/comment');
    }

    public function deleteAll(Request $request)
    {
        $comments =Comment::find($request->checkBoxArray);
        foreach ($comments as $comment) {
            $comment->delete();
        }
        Session::flash('delete_comment','نظر  با موفقیت حذف شد');
        return redirect('/admin/comment');
    }
}
