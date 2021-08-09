<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->paginate(5);
        return view('admin.users.index',compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','id');
        return view('admin.users.create',compact(['roles']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = new User();
        if ($file = $request->file('photo_id')) {
            $name = time(). '-'.$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path =$name;
            $photo->user_id = Auth::id();
            $photo->save();
            $user->photo_id = $photo->id;
        }
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=bcrypt($request->input('password'));
        $user->status=$request->input('status');
        $user->save();
        $user->roles()->sync($request->input('roles'));
        Session::flash('add_user','کاربرجدید با موفقیت اضافه شد');
        return redirect('/admin/user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id');
        $role_user = DB::table('role_user')
                    ->where('user_id','=', $user->id)
                    ->pluck('role_id');
        return view('admin.users.edit',compact(['user','roles','role_user']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user= User::findOrFail($id);   
        if ($file = $request->file('photo_id')) {
            $name = time(). '-'.$file->getClientOriginalName();
            $file->move('images',$name);
            $photo = new Photo();
            $photo->name=$file->getClientOriginalName();
            $photo->path =$name;
            $photo->user_id = Auth::id();
            $photo->save();
            $user->photo_id = $photo->id;
        }
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        if (trim($request->input('password') !== '')) {
            $user->password=bcrypt($request->input('password'));
        }
        $user->status=$request->input('status');
        $user->save();
        $user->roles()->sync($request->input('roles'));
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if($user->photo_id !== NULL){
            $photo = Photo::findOrFail($user->photo_id);
            unlink(public_path().$user->photo->path);
            $photo->delete();
        }
        $user->delete();
        Session::flash('delete_user','کاربر با موفقیت حذف شد');
        return redirect()->route('user.index');
    }
}
