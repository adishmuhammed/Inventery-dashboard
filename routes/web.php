<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BlogController;

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

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/services/dialysis', function () {
    return view('charity_services');
});

Route::get('/services/diploma-in-dialysis-technology-(DDT)', function () {
    return view('cource_services');
});

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/blogs', [BlogController::class, 'index']);

Route::get('/gallery', [ProductsController::class, 'index']);

// single blogs
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

// admin pannel
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/add', [ProductsController::class, 'create'])->name('products.create');
Route::post('/delete/{product}', [ProductsController::class, 'destroy'])->name('products.destroy');
Route::post('/store', [ProductsController::class, 'store'])->name('products.store');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::post('/blog/delete/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

// error page routing
Route::get('/404', function () {
    return view('error.404');
});

Route::get('/500', function () {
    return view('error.500');
});

Route::get('/503', function () {
    return view('error.503');
});

Route::get('/400', function () {
    return view('error.400');
});

Route::get('/403', function () {
    return view('error.403');
});

Route::get('/401', function () {
    return view('error.401');
});

Route::get('/502', function () {
    return view('error.502');
});

Route::get('/504', function () {
    return view('error.504');
});