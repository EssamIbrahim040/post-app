<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/',[PostController::class ,'homePage'])->name('home');

Route::get('index',[PostController::class ,'index'])->name('index');
Route::get('show/{id}',[PostController::class ,'show'])->

Route::get('create',[PostController::class , 'create'])->name('add-post');
Route::post('posts',[PostController::class , 'store']);
Route::get('posts/{id}/edit',[PostController::class , 'edit']);
Route::put('posts/{id}',[PostController::class , 'update']);
Route::delete('posts/{id}',[PostController::class , 'destroy']);


