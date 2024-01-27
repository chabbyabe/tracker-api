<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
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

// get User 
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('wallets', WalletController::class);
Route::resource('transactions', TransactionController::class);

// Route::get('users', [UserController::class, 'index']);
// Route::get('users/{id}',  [UserController::class, 'show']);
// Route::post('users', [UserController::class, 'store']);
// Route::put('users/{id}', [UserController::class, 'update']);
// Route::delete('users/{id}', [UserController::class, 'destroy']);

