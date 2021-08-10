<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\User;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $postCount = Post::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $photoCount = Photo::count();
        $categories = Category::orderBy('created_at','asc')->limit(5)->get();
        $users = User::orderBy('created_at','desc')->limit(5)->get();
        return view('admin.index',compact(['postCount','categoryCount','userCount'
        ,'photoCount','users','categories']));
    }
}
