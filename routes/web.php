<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Products;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'products' => Products::all(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/products/{id}/edit', [ProductController::class, 'Edit'])->name('products.edit');
    Route::patch('/products/{id}', [ProductController::class, 'Update'])->name('products.update');
    Route::post('/set-distributor/{id}', [ProductController::class, 'SetDistributor'])->name('products.setDistributor');
    Route::get('/add-categories', [ProductController::class, 'AddCategories'])->name('products.addCategories');
    Route::post('/new-categories', [ProductController::class, 'NewCategories'])->name('products.newCategories')
;

Route::get('/Admin', [AdminDashboard::class, 'index'])
    ->name('admin')
    ->middleware(['inertia']);

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('/users/{user}/products', [ProductsController::class, 'index']);
    Route::patch('/users/{user}/toggle-status', [UsersController::class, 'toggleStatus']);
});

require __DIR__ . '/auth.php';
