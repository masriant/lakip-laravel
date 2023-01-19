<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardAdminController;
// use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Masrianto",
        "email" => "masrianto@lakip.co.id",
        "image" => "masrianto.jpg"
    ]);
});


Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/team', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard/team/sertifikat', [DashboardController::class, 'sertifikat'])->middleware('auth');
Route::get('/dashboard/team/peserta', [DashboardController::class, 'peserta'])->middleware('auth');
Route::get('/dashboard/team/team', [DashboardController::class, 'team'])->middleware('auth');

Route::get('/dashboard', function() { return view('dashboard.index'); })->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/admin', DashboardAdminController::class)->middleware('auth');

