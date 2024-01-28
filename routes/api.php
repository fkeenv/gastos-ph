<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;

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

// -- Here is where the guest API routes are declared.
Route::post('login', function () {})->name('auth.login');
Route::post('register', function () {})->name('auth.register');

// -- /accounts
Route::group(['prefix' => 'accounts'], function () {
    Route::get('', [AccountController::class, 'index'])->name('account.index');
    Route::get('{account}', [AccountController::class, 'show'])->name('account.show');
    Route::post('', [AccountController::class, 'store'])->name('account.store');
    Route::patch('{account}', [AccountController::class, 'update'])->name('account.update');
    Route::delete('{account}', [AccountController::class, 'destroy'])->name('account.destroy');
});
