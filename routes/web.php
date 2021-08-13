<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UpdateController;



// Route::get('description/{slug}', [PagesController::class, 'description'])->name('description');

Route::get('showUserPost/{id}', [PagesController::class, 'showOne'])->name('showUserPost');


Route::get('blog', [PagesController::class, 'showblog'])->name('blog');

Route::get('signup', [PagesController::class, 'showsignup'])->name('signup');
Route::post('signup', [PagesController::class, 'signup']);


Route::get('login', [PagesController::class, 'showlogin'])->name('login');
Route::post('login', [PagesController::class, 'login']);

Route::post('logout', [PagesController::class, 'logout'])->name('logout');

Route::get('create', [PostsController::class, 'viewCreatePage'])->name('create');
Route::post('create', [PostsController::class, 'createpost']);

Route::get('update/{slug}', [UpdateController::class, 'updateView'])->name('update');
Route::post('update/{slug}', [UpdateController::class, 'update']);

Route::delete('blog/{slug}', [PostsController::class, 'destroy'])->name('blog.destroy');










