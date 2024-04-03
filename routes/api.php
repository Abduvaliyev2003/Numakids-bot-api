<?php

use App\Http\Controllers\Api\V1\AdminController as NumakidsAdminController;
use App\Http\Controllers\Api\V1\MainController as NumakidsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('numakids-crater')->name('numakids.')->group(function () {
    Route::post('store', [NumakidsController::class, 'store'])->name('store');
    Route::post('check', [NumakidsController::class, 'check'])->name('check');
    Route::post('get-url', [NumakidsController::class, 'getUrl'])->name('url-get');
    Route::post('get-info', [NumakidsController::class, 'getInfo'])->name('info-get');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::post('add-links', [NumakidsAdminController::class, 'addLinks'])->name('add-links');
        Route::post('get-users', [NumakidsAdminController::class, 'getUsers'])->name('get-users');
        Route::post('get-user', [NumakidsAdminController::class, 'getUser'])->name('get-user');
    });
});
