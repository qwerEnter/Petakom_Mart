<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScheduleController;

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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('admin/schedule', function () {
    return view('admin.schedule');
});

Route::get('cashier/schedule', function () {
    return view('cashier.schedule-cashier');
});

Route::resource('manageinventory/inventories', InventoryController::class);

//Route::resource('manageschedule/schedule', ScheduleController::class);

Route::resource('admin/delivery', DeliveryController::class);

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () { });