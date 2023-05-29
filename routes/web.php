<?php

use Illuminate\Support\Facades\Route;
//what control function to call
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


