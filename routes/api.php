<?php

use App\Models\Order;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('excel',[\App\Http\Controllers\OrderController::class, 'excel'])->name('excel');

Route::get('test', function (){

    $order = Order::find(1);

    dd($order->deliveryman_id);



//    return "987";
});
