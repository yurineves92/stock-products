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

//Relatórios
Route::get('/reports/products_entries','ReportsController@products_entries');
Route::get('/reports/products_outputs','ReportsController@products_outputs');
Route::get('/reports/products','ReportsController@products');
Route::get('/reports/suppliers','ReportsController@suppliers');

Route::post('/pdf/products_entries','ReportsController@pdf_products_entries');