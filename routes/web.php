<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', [ProfileController::class, 'indexDashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {

    // Products
    Route::resource('products', ProductController::class);
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Orders

    // Accounts
    Route::get('/account', [ProfileController::class, 'index'])->name('account.index');
    Route::get('/account/create', [ProfileController::class, 'create'])->name('account.create');
    Route::post('account', [ProfileController::class, 'store'])->name('account.store');
    Route::get('account/{user}/edit', [ProfileController::class, 'accountEdit'])->name('account.edit');
    Route::put('account/{user}', [ProfileController::class, 'accountUpdate'])->name('account.update');
    Route::delete('/account/{id}', [ProfileController::class, 'destroy'])->name('account.destroy');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';