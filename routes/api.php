<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Client\Page\Home\Controllers\HomeController;

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
// dd(1);
Route::post('/payment', [HomeController::class, 'payment'])->name('payment');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
