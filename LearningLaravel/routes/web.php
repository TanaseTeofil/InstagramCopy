<?php

use Illuminate\Support\Facades\Route;
use App\Mail\NewUserWelcomeMail;
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



Route::get('/email', function() {
    return new NewUserWelcomeMail();
});

Route::post('follow/{user}', [App\Http\Controllers\FollowsController::class, 'store'])->name('p.create');

Route::get('/', [App\Http\Controllers\PostsController::class, 'index'])->name('/');
Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create'])->name('p.create');
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store'])->name('p.create');
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show'])->name('p.create');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');

Auth::routes();
Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\ProfilesController::class, 'index'])->name('home');
