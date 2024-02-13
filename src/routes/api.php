<?php

use App\Http\Controllers\User\UserSettingsController;
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

Route::prefix('user')->group(function () {
    Route::post('/settings/request', [UserSettingsController::class, 'requestConfirm']);
    Route::post('/settings/confirm', [UserSettingsController::class, 'confirm']);
});
