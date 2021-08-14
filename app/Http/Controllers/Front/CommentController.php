<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Store the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        if ($post) {
            $comment = new Comment();
            $comment->description = $request->input('description');
            $comment->post_id = $post->id;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('add_comment','کامنت با موفقیت ثبت شد و بعد از تایید مدیر به نمایش در خواهد آمد');
        return back();
    }
    /**
     * Reply the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reply(Request $request)
    {
        $postID = $request->input('post_id');
        $parentID = $request->input('parent_id');
        $post = Post::findOrFail($postID);
        if ($post) {
            $comment = new Comment();
            $comment->description = $request->input('description');
            $comment->post_id = $post->id;
            $comment->parent_id = $parentID;
            $comment->status = 0;
            $comment->save();
        }
        Session::flash('add_comment','کامنت با موفقیت ثبت شد و بعد از تایید مدیر به نمایش در خواهد آمد');
        return back();
    }
}
