<?php


use App\Http\Controllers\CashierController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\SalesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Inertia\Inertia;

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
Route::get('/sales', 'App\Http\Controllers\SalesController@index')->name('manageSales.salesFlow');
Route::get('/reportSales', [SalesController::class, 'reportSale']);
Route::get('/sales/create', 'App\Http\Controllers\SalesController@create')->name('manageSales.sales');
Route::post('/sales', 'App\Http\Controllers\SalesController@store')->name('sales.store');
Route::get('/sales/{id}/delete', [SalesController::class, 'delete']);


Route::resource('manageinventory/inventories', InventoryController::class);
Route::post('/inventory/create', [InventoryController::class, 'create']);
Route::get('/inventory/{id}/edit', [InventoryController::class, 'edit']);
Route::post('/inventory/{id}/update', [InventoryController::class, 'update']);
Route::get('/inventory/{id}/delete', [InventoryController::class, 'delete']);

Route::get('/inventory', function () {
    return view('manageinventory.addinventory');
});


Route::resource('admin/delivery', DeliveryController::class);

// Route::resource('admin/sales', CashierController::class);


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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () { });

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

