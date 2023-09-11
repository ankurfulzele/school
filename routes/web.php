<?php

use Illuminate\Support\Facades\Route;

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
//frotend route

Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/about', function () {
    return view('frontend.about' );
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/courses', function () {
    return view('frontend.courses');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});
Route::get('/join', function () {
    return view('frontend.join');
});
//Admin route
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
