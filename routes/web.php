<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CrudController;


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
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Raga Devara",
        "email" =>"111@gmail.com",
        "image" => "foto.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman Single Post
Route::get('blog/{post:slug}', [PostController::class, 'show']);






//crud
Route::get('/crud', [CrudController::class, 'index']);
Route::get('/tambah', [CrudController::class, 'create']);
Route::post('/simpan', [CrudController::class, 'store']);
Route::get('/edit/{id}', [CrudController::class, 'edit']);
Route::post('/update/{id}', [CrudController::class, 'update']);
Route::get('/delete/{id}', [CrudController::class, 'destroy']);




