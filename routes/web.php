<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/single-blog', function() {
    return view('single-blog');
})->name('single-blog');
Route::get('/contact-us', function() {
    return view('contact-us');
})->name('contact-us');
Route::get('/about', function() {
    return view('about');
})->name('about');
Route::get('/categories', function() {
    return view('categories');
})->name('categories');
