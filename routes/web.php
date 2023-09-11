<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\VisitorsController;

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

Route::get('/', [VisitorsController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/single-blog/{id}', [VisitorsController::class, 'singleBlog'])->name('single-blog');
Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact-us');
Route::get('/about', function() {
    return view('about');
})->name('about');

Route::get('/categories-ui', function() {
    return view('categories');
})->name('categories-ui');

Route::post('/upload', [ImageUploadController::class, 'upload']);

Route::middleware(['auth'])->group(function() {
    Route::resource('posts', PostsController::class);
});
