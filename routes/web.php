<?php

use App\Http\Controllers\PostController;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\PassandoParametro;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter',Counter::class);
Route::get('/posts', CreatePost::class);
Route::get('/passando-parametro', PassandoParametro::class);

Route::get('/post/create',[PostController::class,'create'])->name('post.create');
