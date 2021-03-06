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

Auth::routes();

Route::get('/', 'SoapController@show');

Route::resource('/subscriptions', 'SubscriptionController');
Route::resource('/discounts', 'DiscountController');
Route::resource('/customers', 'CustomerController');
Route::resource('/invoice', 'InvoiceController');
Route::resource('/pricePlan', 'PricePlanController');
Route::resource('/product', 'ProductController');
