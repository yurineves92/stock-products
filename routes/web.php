<?php

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
    return view('index');
});

Route::resource('/categories', 'CategoriesController');
Route::resource('/products', 'ProductsController');
Route::resource('/clients', 'ClientsController');
Route::resource('/suppliers', 'SuppliersController');
Route::resource('/products_entries', 'ProductsEntriesController');
Route::resource('/products_outputs', 'ProductsOutputsController');
Route::resource('/reports','ReportsController');