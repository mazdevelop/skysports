<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['middleware'=>'admin'],function ()
{
    Route::resource('admin/user',  UserController::class)->except(['show']);
    Route::resource('admin/post',  PostController::class)->except(['show']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
