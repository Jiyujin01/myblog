<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminAuthController;
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

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('home.index');
Route::get('/blogs/{blog}', [App\Http\Controllers\BlogController::class, 'show'])->name('home.show');
Route::post('/blogs/{blog}', [App\Http\Controllers\CommentController::class, 'store'])->name('home.comment.store');

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact-us', [App\Http\Controllers\MessageController::class, 'index'])->name('contactus');
Route::post('/messages/{message}', [App\Http\Controllers\MessageController::class, 'store'])->name('contactus.message.store');


Auth::routes(['register' => false]);

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');

Route::get('/admin/blogs', [App\Http\Controllers\AdminBlogController::class, 'index'])->name('admin.blogs.index');
Route::get('/admin/blogs/create', [App\Http\Controllers\AdminBlogController::class, 'create'])->name('admin.blogs.create');
Route::post('/admin/blogs', [App\Http\Controllers\AdminBlogController::class, 'store'])->name('admin.blogs.store');
Route::get('/admin/blogs/{blog}', [App\Http\Controllers\AdminBlogController::class, 'modify'])->name('admin.blogs.modify');
Route::put('/admin/blogs/{blog}', [App\Http\Controllers\AdminBlogController::class, 'update'])->name('admin.blogs.update');
Route::get('/admin/blogs/{blog}/delete', [App\Http\Controllers\AdminBlogController::class, 'delete'])->name('admin.blogs.delete');
Route::delete('/admin/blogs/{blog}', [App\Http\Controllers\AdminBlogController::class, 'destroy'])->name('admin.blogs.destroy');

Route::get('/admin/users', [App\Http\Controllers\AdminUserController::class, 'index'])->name('admin.users.index');
Route::get('/admin/users/create', [App\Http\Controllers\AdminUserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [App\Http\Controllers\AdminUserController::class, 'store'])->name('admin.users.store');
Route::get('/admin/users/{user}', [App\Http\Controllers\AdminUserController::class, 'modify'])->name('admin.users.modify');
Route::put('/admin/users/{user}', [App\Http\Controllers\AdminUserController::class, 'update'])->name('admin.users.update');
Route::get('/admin/users/{user}/delete', [App\Http\Controllers\AdminUserController::class, 'delete'])->name('admin.users.delete');
Route::delete('/admin/users/{user}', [App\Http\Controllers\AdminUserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/admin/users/{user}/reset', [App\Http\Controllers\AdminUserController::class, 'reset'])->name('admin.users.reset');
Route::patch('/admin/users/{user}', [App\Http\Controllers\AdminUserController::class, 'resetOk'])->name('admin.users.resetOk');

Route::get('/admin/comments', [App\Http\Controllers\AdminCommentController::class, 'index'])->name('admin.comments.index');
Route::get('/comments/{comment}', [App\Http\Controllers\AdminCommentController::class, 'show'])->name('admin.comments.show');
Route::get('/admin/comments/{comment}/delete', [App\Http\Controllers\AdminCommentController::class, 'delete'])->name('admin.comments.delete');
Route::delete('/admin/comments/{comment}', [App\Http\Controllers\AdminCommentController::class, 'destroy'])->name('admin.comments.destroy');

Route::get('/admin/auth', [App\Http\Controllers\AdminAuthController::class, 'index'])->name('admin.auth.index');
Route::put('/admin/auth', [App\Http\Controllers\AdminAuthController::class, 'changePassword'])->name('admin.auth.changePassword');

Route::get('/admin/messages', [App\Http\Controllers\AdminMessageController::class, 'index'])->name('admin.messages.index');
Route::get('/messages/{message}', [App\Http\Controllers\AdminMessageController::class, 'show'])->name('admin.messages.show');
Route::get('/admin/messages/{message}/delete', [App\Http\Controllers\AdminMessageController::class, 'delete'])->name('admin.messages.delete');
Route::delete('/admin/message/{message}', [App\Http\Controllers\AdminMessageController::class, 'destroy'])->name('admin.messages.destroy');

