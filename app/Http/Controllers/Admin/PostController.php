<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Str;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('category','user','photo')->get();
        return view('admin.posts.index',compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title','id');
        return view('admin.posts.create',compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $post = new Post();
        if ($file = $request->file('first_photo')) {
            $name = time(). '-'.$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path =$name;
            $photo->user_id = Auth::id();
            $photo->save();
            $post->photo_id = $photo->id;
        }
        $post->title = $request->input('title');
        if ($request->input('slug')) {
            $post->slug = Str::makeSlug($request->input('slug'));
        } else {
            $post->slug = Str::makeSlug($request->input('title'));
        }
        
        $post->description = $request->input('description');
        $post->category_id = $request->input('category');
        $post->meta_keywords = $request->input('meta_keywords');
        $post->meta_description = $request->input('meta_description');
        $post->status = $request->input('status');
        $post->user_id = Auth::id();
        $post->save();
        Session::flash('add_post','پست جدید با موفقیت اضافه شد');
        return redirect('/admin/post');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('category')->where('id',$id)->first();
        $categories = Category::pluck('title','id');
        return view('admin.posts.edit',compact(['post','categories']));
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
        $post = Post::findOrFail($id);
        
        if ($file = $request->file('photo_id')) {
            if($post->photo_id !== NULL){
                $photo = Photo::findOrFail($post->photo_id);
                if (file_exists(public_path().$post->photo->path)) {
                    unlink(public_path().$post->photo->path);
                }
            }
            $name = time(). '-'.$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path =$name;
            $photo->user_id = Auth::id();
            $photo->save();
            $post->photo_id = $photo->id;
        }
        $post->title = $request->input('title');
        if ($request->input('slug')) {
            $post->slug = Str::makeSlug($request->input('slug'));
        } else {
            $post->slug = Str::makeSlug($request->input('title'));
        }
        
        $post->description = $request->input('description');
        $post->category_id = $request->input('category');
        $post->meta_keywords = $request->input('meta_keywords');
        $post->meta_description = $request->input('meta_description');
        $post->status = $request->input('status');
        $post->save();
        Session::flash('update_post','پست  با موفقیت ویرایش شد');
        return redirect('/admin/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        
        if($post->photo_id !== NULL){
            $photo = Photo::findOrFail($post->photo_id);
            if (file_exists(public_path().$post->photo->path)) {
                unlink(public_path().$post->photo->path);
            }
        }    
        $photo->delete();
        $post->delete();
        Session::flash('delete_post','پست  با موفقیت حذف شد');
        return redirect('/admin/post');
    }
}
