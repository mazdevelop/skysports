<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\CommentController;
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

Route::group(['prefix'=>'/'],function ()
{
    Route::get('', [ MainController::class ,'index']);
    Route::get('posts/{slug}', [ MainController::class ,'show'])->name('front.post.show');
    Route::post('comment/{id}', [ App\Http\Controllers\Front\CommentController::class ,'store'])->name('front.comment.store');
    Route::post('comment', [ App\Http\Controllers\Front\CommentController::class ,'reply'])->name('front.comment.reply');    
});



Auth::routes();

Route::group(['middleware'=>'admin','prefix'=>'admin/'],function ()
{

    Route::get('', [ DashboardController::class ,'index'])->name('admin');
    Route::resource('user',  UserController::class)->except(['show']);
    Route::resource('post',  PostController::class)->except(['show']);
    Route::resource('category', CategoryController::class)->except(['show']);
    Route::resource('photo', PhotoController::class)->except(['show']);
    Route::resource('comment', CommentController::class)->except(['show','create','store']);
    Route::delete('delete/comment', [CommentController::class , 'deleteAll'])->name('comment.delete.all');

});

