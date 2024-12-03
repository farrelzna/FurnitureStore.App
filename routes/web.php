<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoucherController;
use App\Exports\UsersExport;
use App\Exports\ProductsExport;
use App\Http\Controllers\ExportController;
use Maatwebsite\Excel\Facades\Excel;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [AccountSettingsController::class, 'indexHome'])->name('home');
Route::get('/dashboard', [AccountSettingsController::class, 'indexDashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Products
    Route::resource('/products', ProductController::class);
    Route::get('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
    Route::get('/export-products', [ExportController::class, 'exportProducts'])->name('products.export.excel');

    // Vouchers
    Route::resource('/vouchers', VoucherController::class);
    Route::get('/vouchers/{id}', [VoucherController::class, 'delete'])->name('vouchers.delete');
    Route::get('/export-vouchers', [ExportController::class, 'exportVouchers'])->name('vouchers.export.excel');

    // Orders

    // Users
    Route::get('/account', [AccountSettingsController::class, 'index'])->name('account.index');
    Route::get('/account/create', [AccountSettingsController::class, 'create'])->name('account.create');
    Route::post('account', [AccountSettingsController::class, 'store'])->name('account.store');
    Route::get('account/{user}/edit', [AccountSettingsController::class, 'accountEdit'])->name('account.edit');
    Route::put('account/{user}', [AccountSettingsController::class, 'accountUpdate'])->name('account.update');
    Route::delete('/account/{id}', [AccountSettingsController::class, 'destroy'])->name('account.destroy');
    Route::get('/account/{id}', [AccountSettingsController::class, 'delete'])->name('account.delete');

    Route::get('/export-users', [ExportController::class, 'exportUsers'])->name('users.export.excel');

    // Profile / Settings
    Route::get('/profile', [ProfileController::class, 'index'])->name('showProfile');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('profile/edit', [ProfileController::class, 'update'])->name('profile.update');

    // Account Settings
    Route::get('/settings', [AccountSettingsController::class, 'settingAcount'])->name('accountSettings.edit');
    Route::patch('/settings', [AccountSettingsController::class, 'update'])->name('accountSettings.update');
    Route::delete('/setings', [AccountSettingsController::class, 'destroy'])->name('accountSettings.destroy');
});

require __DIR__ . '/auth.php';