<?php

use App\Http\Controllers\Mount\FetchAllMountsController;
use App\Http\Controllers\Mount\FetchMountsController;
use App\Http\Controllers\Rider\DeleteRiderController;
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
    Route::post('delete', [DeleteRiderController::class, 'deleteRider']);
});

Route::prefix('mounts')->group(function () {
    Route::get('all', [FetchAllMountsController::class, 'fetchAllMounts']);
    Route::post('fetch', [FetchMountsController::class, 'fetchMounts']);
});
