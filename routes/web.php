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
    return view('welcome');
});
	
// use controller
// Route::get('/nyobak', 'JaranController@index');

// //use controller
// //memunculkan function "home"
// Route::get('/nyobak2', 'JaranController@home');

// // Customer
// Route::get('/Customer', 'CustomerController@index');
// Route::get('/Customer/create', 'CustomerController@create');
// Route::get('/Customer/store', 'CustomerController@store');
Route::resource('Customer', 'CustomerController');

Route::resource('Supplier', 'SupplierController');

Route::resource('Karyawan', 'KaryawanController');

Route::resource('Employee', 'EmployeeController');

// //Supplier
// Route::get('/Supplier', 'SupplierController@index');

// // //Karyawan
// Route::get('/Karyawan', 'KaryawanController@index');

// //Products
// Route::get('/Products', 'ProductsController@index');
 