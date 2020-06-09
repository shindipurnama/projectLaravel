<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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



Route::get('index','Admin\AdminController@index_admin');

Route::get('/','Admin\LoginController@index');
Route::get('login','Admin\LoginController@index');
Route::post('proses','Admin\LoginController@proses');
Route::get('logout', 'Admin\LoginController@logout');

Route::get('register','Admin\RegisterController@index');
Route::post('RegisterStore','Admin\RegisterController@store');

Route::get('SalesDetail','Admin\Transaksi\SalesController@Index2');
Route::get('SalesIndex','Admin\Transaksi\SalesController@Index');
Route::get('SalesDetailView','Admin\Transaksi\PosController@show');
Route::get('PosIndex','Admin\Transaksi\PosController@Index');
Route::get('PosIndex','Admin\Transaksi\PosController@create');
Route::post('PosStore','Admin\Transaksi\PosController@store');

Route::get('CategoriesIndex','Admin\Master\CategoriesController@index');
Route::get('CategoriesCreate','Admin\Master\CategoriesController@create');
Route::post('CategoriesStore','Admin\Master\CategoriesController@store');
Route::get('CategoriesEdit{id}','Admin\Master\CategoriesController@edit');
Route::post('CategoriesUpdate','Admin\Master\CategoriesController@update');
Route::get('CategoriesDestroy/{id}','Admin\Master\CategoriesController@destroy');

Route::get('ProductIndex','Admin\Master\ProductController@index');
Route::get('ProductCreate','Admin\Master\ProductController@create');
Route::post('ProductStore','Admin\Master\ProductController@store');
Route::get('ProductEdit{id}','Admin\Master\ProductController@edit');
Route::post('ProductUpdate','Admin\Master\ProductController@update');
Route::get('ProductDestroy/{id}','Admin\Master\ProductController@destroy');

Route::get('CustomerIndex','Admin\Master\CustomerController@index');
Route::get('CustomerCreate','Admin\Master\CustomerController@create');
Route::post('CustomerStore','Admin\Master\CustomerController@store');
Route::get('CustomerEdit{id}','Admin\Master\CustomerController@edit');
Route::post('CustomerUpdate','Admin\Master\CustomerController@update');
Route::get('CustomerDestroy/{id}','Admin\Master\CustomerController@destroy');

Route::get('UserIndex','Admin\Master\UserController@index');
Route::get('UserCreate','Admin\Master\UserController@create');
Route::post('UserStore','Admin\Master\UserController@store');
Route::get('UserEdit{id}','Admin\Master\UserController@edit');
Route::post('UserUpdate','Admin\Master\UserController@update');
Route::get('UserDestroy/{id}','Admin\Master\UserController@destroy');





