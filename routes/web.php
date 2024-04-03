<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');

    Route::post('export', [OrderController::class, 'export'])->name('export');
    Route::get('mydelivery', [OrderController::class, 'mydelivery'])->name('mydelivery');
    Route::put('delivered/{id}', [OrderController::class, 'delivered'])->name('delivered');
    Route::get('myDelivered', [OrderController::class, 'myDelivered'])->name('myDelivered');
    Route::get('myUnDelivered', [OrderController::class, 'myUnDelivered'])->name('myUndelivered');

    Route::resources([
        'users' => UserController::class,
        'roles' => RoleController::class,
        'orders' => OrderController::class,
        'products' => ProductController::class,
        'categories' => CategoryController::class,
    ]);

});


