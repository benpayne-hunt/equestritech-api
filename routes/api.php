<?php

use App\Http\Controllers\Mount\FetchAllMountsController;
use App\Http\Controllers\Rider\FetchAllRidersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('riders')->group(function () {
    Route::get('all', [FetchAllRidersController::class, 'fetchAllRiders']);
});

Route::prefix('mounts')->group(function () {
    Route::get('all', [FetchAllMountsController::class, 'fetchAllMounts']);
});
