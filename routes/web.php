<?php

use App\Http\Controllers\PingController;
use App\Http\Middleware\AbortIfHostIsDownOrInactive;
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

Route::get('/', function () {
    return view('index');
});

Route::name('ping:')->prefix('/ping')->group(function () {
    Route::name('not-chong601')->get('not-chong601', [PingController::class, 'notchong601']);
    Route::name('yes-chong601')->get('yes-chong601', [PingController::class, 'yeschong601']);

    Route::name('index')->get('', [PingController::class, 'index']);
    Route::name('anything-else')->get('anythingelse', [PingController::class, 'anythingElse']);
    Route::name('2gbps')->get('2gbps', [PingController::class, 'unifi2Gbps']);
    Route::name('charts:')->prefix('charts')->group(function () {
        Route::name('index')->get('', [PingController::class, 'charts']);
        Route::name('host:')->prefix('{host}')->group(function () {
            Route::name('get-chart-page')->get('', [PingController::class, 'getChartPage']);
        })->middleware(AbortIfHostIsDownOrInactive::class);
    });
});

Route::prefix('/cv')->name('curiculum-vitae:')->group(function () {
    Route::get('', [PingController::class, 'index'])->name('index');
    Route::prefix('docx')->name('docx:')->group(function () {
        //
    });
    Route::prefix('pdf')->name('pdf:')->group(function () {
        //
    });
    Route::prefix('txt')->name('txt:')->group(function () {
        //
    });
    Route::prefix('html')->name('html:')->group(function () {
        //
    });

});

