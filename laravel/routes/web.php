<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'index'])->name('homepage');

Route::get('/about-us', [PagesController::class,'aboutus'])->name('aboutus');

Route::post('/addblog', [PagesController::class,'addblog'])->name('addblog');

Route::get('/showblog/{id}', [PagesController::class,'showblog'])->name('showblog');

Route::delete('/deleteblog/{id}',[PagesController::class,'deleteblog'])->name('deleteblog');

Route::get('editBlog/{id}',[PagesController::class,'editBlog'])->name('editBlog');

Route::post('editBlog/{id}',[PagesController::class,'editBlogPost'])->name('editBlogPost');