<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ MainController::class ,'index']);
Route::get('/posts/{slug}', [ MainController::class ,'show'])->name('front.post.show');

Auth::routes();
Route::group(['middleware'=>'admin'],function ()
{
    Route::get('admin/', [ DashboardController::class ,'index'])->name('admin');
    Route::resource('admin/user',  UserController::class)->except(['show']);
    Route::resource('admin/post',  PostController::class)->except(['show']);
    Route::resource('admin/category', CategoryController::class)->except(['show']);
    Route::resource('admin/photo', PhotoController::class)->except(['show']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
