<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        // $photoCovers = Photo::whereIn('id', [1,2])->get();
        $postLatest = Post::with('user','category','photo')->latest()->where('status','1')->take(3)->get();
        $posts = Post::with('user','category','photo')->where('status','1')->take(4)->get();
        $postCovers = Post::with('user','category','photo')->inRandomOrder()->where('status','1')->take(2)->get();
        $categories = Category::all();
        return view('frontend.index',compact(['postCovers','postLatest','categories','posts']));
    }
    public function show($slug)
    {
        $post = Post::with(['comments'=> function($q)
        {
            
            $q->where('parent_id',null)
            ->where('status','1');

        }])->where('slug',$slug)->first();
        return view('frontend.posts.show',compact(['post']));
    }

}
