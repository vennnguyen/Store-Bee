<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/admin/product_add', function () {
    return view('admin.product_add');
});

Route::get('/admin/product_list', function () {
    return view('admin.product_list');
});

Route::get('/admin/order_list', function () {
    return view('admin.order_list');
});

Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
});

Route::get('/', function () {
    return view('welcome');
});
