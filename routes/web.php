<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CrudController;
use App\Models\Category;
use App\Models\User;


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

Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raga Devara",
        "email" =>"111@gmail.com",
        "active" => 'about',
        "image" => "foto.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman Single Post
Route::get('blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title' =>'Post Categories',
        "active" => 'categories',
        'categories' =>Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog',[
        'title' =>"Post by Category: $category->name",
        "active" => 'categories',
        'posts' =>$category->posts->load('category', 'user')
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('blog',[
        'title' =>"Post by Author: $author->name",
        'posts' =>$author->posts->load('category', 'user'),
    ]);
});






//crud
Route::get('/crud', [CrudController::class, 'index']);
Route::get('/tambah', [CrudController::class, 'create']);
Route::post('/simpan', [CrudController::class, 'store']);
Route::get('/edit/{id}', [CrudController::class, 'edit']);
Route::post('/update/{id}', [CrudController::class, 'update']);
Route::get('/delete/{id}', [CrudController::class, 'destroy']);




