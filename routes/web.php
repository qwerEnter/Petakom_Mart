<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryController;


Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('admin/userprofile', function () {
    return view('admin.userprofile');
});

Route::get('admin/schedule', function () {
    return view('admin.schedule');
});
Route::get('admin/inventory', function () {
    return view('admin.inventory');
});

Route::get('admin/sales', function () {
    return view('admin.sales');
});

Route::get('admin/delivery', function () {
    return view('admin.delivery');
});

//for display cashier catch index
Route::get('/admin/delivery', [DeliveryController::class, 'index']);
//delete cashier
Route::get('/admin/delivery/delete/{id}', [DeliveryController::class, 'delete'])->name('delete_cashier');
//for add cashier
Route::post('/save-newcashier', [DeliveryController::class, 'save']);

//for display meetup catch index
// Route::get('/admin/delivery', [DeliveryController::class, 'index2']);
//delete meetup
Route::get('/admin/delivery/delete2/{id}', [DeliveryController::class, 'delete2'])->name('delete_meetup');
//for add meetup
Route::post('/save-newmeetup', [DeliveryControllers::class, 'save2']);








