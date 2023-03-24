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

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/services/dialysis', function () {
    return view('charity_services');
});

Route::get('/services/Diploma-In-Dialysis-Technology-(DDT)', function () {
    return view('cource_services');
});