<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\DeviceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('/', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard.index');
Route::prefix('agents')->middleware(['auth'])->group(function () {
    Route::get('', [AgentController::class, 'index'])->name('agents.index');
    Route::post('', [AgentController::class, 'store'])->name('agent.store');
    Route::put('{agent}', [AgentController::class, 'update'])->name('agent.update');
    Route::delete('{agent}', [AgentController::class, 'destroy'])->name('agent.destroy');
});
Route::prefix('stations')->middleware(['auth'])->group(function () {
    Route::get('', [StationController::class, 'index'])->name('station.index');
    Route::post('', [StationController::class, 'store'])->name('station.store');
    Route::put('{station}', [StationController::class, 'update'])->name('station.update');
    Route::delete('{station}', [StationController::class, 'destroy'])->name('station.destroy');
});
Route::prefix('')->middleware(['auth'])->group(function () {
    Route::get('', [ClientController::class, 'index'])->name('clients.index');
    Route::post('', [ClientController::class, 'store'])->name('client.store');
    Route::put('{client}', [ClientController::class, 'update'])->name('client.update');
    Route::delete('{client}', [ClientController::class, 'destroy'])->name('client.destroy');
});

Route::get('device', [DeviceController::class, 'index']);
Route::get('device/card', [DeviceController::class, 'fetchCard']);
Route::get('device/cardTapped', [DeviceController::class, 'getCard']);

Route::get('report', [ReportController::class,'index'])->middleware(['auth'])->name('report.index');
require __DIR__.'/auth.php';
