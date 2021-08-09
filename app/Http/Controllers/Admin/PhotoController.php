<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::with(['user'])->get();
        return view('admin.photos.index',compact(['photos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($file = $request->file('file')) {
            $name = time(). '-'.$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path =$name;
            $photo->user_id = Auth::id();
            $photo->save();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::findOrFail($id);
        
        if($photo->id !== NULL){
            $photo = Photo::findOrFail($id);
            if (file_exists(public_path().$photo->path)) {
                unlink(public_path().$photo->path);
            }
        }    
        $photo->delete();
        Session::flash('delete_photo','عکس  با موفقیت حذف شد');
        return redirect('/admin/photo');
    }
}
