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

Route::get('/manageschedule/schedule','App\Http\Controllers\ScheduleController@index2');
Route::get('manageschedule/display','App\Http\Controllers\ScheduleController@index1'); //display schedule
Route::get('manageschedule/schedule-cashier','App\Http\Controllers\ScheduleController@indexcashier'); //page customer
Route::get('/schedule','App\Http\Controllers\ScheduleController@index'); //page admin
Route::post('/schedule/create','App\Http\Controllers\ScheduleController@create')->name('schedule.create');
Route::post('/manageschedule/schedule-cashier/create','App\Http\Controllers\ScheduleController@createcashier')->name('schedule-cashier.create');
Route::get('/schedule/{id}/edit','App\Http\Controllers\ScheduleController@edit')->name('schedules.edit');
Route::post('/schedule/{id}/update','App\Http\Controllers\ScheduleController@update');
Route::get('/schedule/{id}/delete','App\Http\Controllers\ScheduleController@delete');


Route::resource('manageinventory/inventories', InventoryController::class);
Route::post('/inventory/create', [InventoryController::class, 'create']);
Route::get('/inventory/{id}/edit', [InventoryController::class, 'edit']);
Route::post('/inventory/{id}/update', [InventoryController::class, 'update']);
Route::get('/inventory/{id}/delete', [InventoryController::class, 'delete']);

Route::get('/inventory', function () {
    return view('manageinventory.addinventory');
});


//Route::resource('manageschedule/schedule', ScheduleController::class);

Route::resource('admin/delivery', DeliveryController::class);



