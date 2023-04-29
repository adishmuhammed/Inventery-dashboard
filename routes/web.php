<?php

use App\Http\Livewire\AboutPage;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\AdminDashboard\BlogCreateForm;
use App\Http\Livewire\AdminDashboard\MediaEditForm;
use App\Http\Livewire\AdminDashboard\MediaUploadForm;
use App\Http\Livewire\BlogsPage;
use App\Http\Livewire\DiplomaInDialysisTechnology;
use App\Http\Livewire\GalleryPage;
use App\Http\Livewire\Homepage;
use App\Http\Livewire\LabTechnician;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\AdminDashboard\BlogUpdateForm;

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


Route::get('/', Homepage::class)->name('home');

Route::get('/about', AboutPage::class)->name('about');

Route::get('/diploma-in-dialysis-technology', DiplomaInDialysisTechnology::class)->name('ddt');

Route::get('/lab-technician', LabTechnician::class)->name('lab-tech');

Route::get('/gallery', GalleryPage::class)->name('gallery');

Route::get('/blog', BlogsPage::class)->name('blog');

Route::get('/login', LoginPage::class)->name('login');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', AdminDashboard::class)->name('admin');

    Route::prefix('/dashboard')->group(function () {

        Route::get('/create-blog', BlogCreateForm::class)->name('create-blog');

        Route::get('/update-blog', BlogUpdateForm::class)->name('update-blog');

        Route::get('/upload-media', MediaUploadForm::class)->name('upload-media');

        Route::get('/edit-media', MediaEditForm::class)->name('edit-media');

    });
});