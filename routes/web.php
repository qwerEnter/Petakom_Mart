<?php

use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DeliveryController;


use App\Http\Controllers\HomeController;

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

Route::resource('manageinventory/inventories', InventoryController::class);

Route::resource('admin/delivery', DeliveryController::class);


// //for display cashier catch index
// Route::get('/admin/delivery', [DeliveryController::class, 'index']);
// //delete cashier
// Route::get('/admin/delivery/delete/{id}', [DeliveryController::class, 'delete'])->name('delete_cashier');
// //for add cashier
// Route::post('/save-newcashier', [DeliveryController::class, 'save']);

// //for display meetup catch index
// // Route::get('/admin/delivery', [DeliveryController::class, 'index2']);
// //delete meetup
// Route::get('/admin/delivery/delete2/{id}', [DeliveryController::class, 'delete2'])->name('delete_meetup');
// //for add meetup
// Route::post('/save-newmeetup', [DeliveryControllers::class, 'save2']);







Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');


Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () { });