<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\InventoryController;
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

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () { });


//display class
Route::resource('manageinventory/inventories', InventoryController::class);

// MANAGE DELIVERY
Route::resource('managedelivery/addcashier', DeliveryController::class);
Route::resource('managedelivery/additem', DeliveryController::class);
Route::resource('managedelivery/addmeetuppoint', DeliveryController::class);
Route::resource('managedelivery/viewcashier', DeliveryController::class);
Route::resource('managedelivery/cashieractivity', DeliveryController::class);
Route::resource('managedelivery/customeractivity', DeliveryController::class);

// customer activity
Route::get('/managedelivery/customeractivity', [DeliveryController::class, 'OrderInfo']);
Route::post('/save-neworder', [DeliveryController::class, 'AddOrder']);

// cashier activity
Route::get('/managedelivery/cashieractivity', [DeliveryController::class, 'DeliveryInfo']);
Route::get('edit-status/{id}', [DeliveryController::class, 'StatusDelivery']);
Route::put('/managedelivery/update-status', [DeliveryController::class, 'UpdateStatusDelivery']);

// admin activity
Route::get('/managedelivery/adminactivity/delete/{id}', [DeliveryController::class, 'DeleteMeetupPoint'])->name('delete_location');
Route::post('/save-newmeetup', [DeliveryController::class, 'AddMeetupPoint']);
Route::get('/managedelivery/adminactivity', [DeliveryController::class, 'CashierInfo']);
Route::get('edit-order/{id}', [DeliveryController::class, 'Cashier']);
Route::put('/managedelivery/update-order', [DeliveryController::class, 'AddCashier']);

// END OF MANAGE DELIVERY