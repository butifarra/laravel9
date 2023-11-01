<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
//Lo anterior es lo mismo que esto si no se usa un closure (función anónima)

Route::view('/', 'welcome')->name('home');
Route::view('/contact', 'contact')->name('contact');

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
Route::view('/about', 'about')->name('about');
