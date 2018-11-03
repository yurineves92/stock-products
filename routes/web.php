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


Route::get('/contact', function () {
    return view('contact');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
    return view('index');
	});
	Route::resource('/categories', 'CategoriesController');
	Route::resource('/products', 'ProductsController');
	Route::resource('/clients', 'ClientsController');
	Route::resource('/suppliers', 'SuppliersController');
	Route::resource('/products_entries', 'ProductsEntriesController');
	Route::resource('/products_outputs', 'ProductsOutputsController');
	Route::resource('/users', 'UserController');
	//Relatórios
	Route::get('/reports/products_entries','ReportsController@products_entries');
	Route::get('/reports/products_outputs','ReportsController@products_outputs');
	Route::get('/reports/products','ReportsController@products');
	Route::get('/reports/suppliers','ReportsController@suppliers');
	//PDFs
	Route::post('/pdf/products_entries','ReportsController@pdf_products_entries');
	Route::post('/pdf/products_outputs','ReportsController@pdf_products_outputs');
	Route::post('/pdf/products','ReportsController@pdf_products');
	Route::post('/pdf/suppliers','ReportsController@pdf_suppliers');
});
//Autenticação
Route::get('/login','UserController@login');
Route::get('/register','UserController@register');
Route::post('/user/store','UserController@store');
Route::post('/authenticate','UserController@authenticate');
Route::get('/logout','UserController@logout');

