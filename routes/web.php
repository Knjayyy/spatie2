<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupplierController;
use App\Models\Client;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients');

    Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers');
    // Route::get('/suppliers', [SupplierController::class, 'index']);

    Route::middleware('can:manage-suppliers')->group(function(){
        Route::post('/suppliers', [SupplierController::class, 'store']);
        Route::post('/suppliers/create', [SupplierController::class, 'create']);
        Route::post('/suppliers/{supplier}', [SupplierController::class, 'edit']);
    });
});

require __DIR__.'/auth.php';
