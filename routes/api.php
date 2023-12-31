<?php

use App\Http\Controllers\Mount\FetchAllMountsController;
use App\Http\Controllers\Mount\FetchMountsController;
use App\Http\Controllers\Rider\CreateNewRiderController;
use App\Http\Controllers\Rider\DeleteRiderController;
use App\Http\Controllers\Rider\FetchAllRidersController;
use App\Http\Controllers\Rider\UpdateRiderController;
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
    Route::post('create', [CreateNewRiderController::class, 'createRider']);
    Route::post('delete', [DeleteRiderController::class, 'deleteRider']);
    Route::post('update', [UpdateRiderController::class, 'updateRider']);
});

Route::prefix('mounts')->group(function () {
    Route::get('all', [FetchAllMountsController::class, 'fetchAllMounts']);
    Route::post('fetch', [FetchMountsController::class, 'fetchMounts']);
});
