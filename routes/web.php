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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('product/view', 'ProductController@index')->name('fetchProduct');

Route::get('admin/product/view', 'ProductController@indexAdmin')->name('fetchProductAdmin');

Route::get('product/create', 'ProductController@create')->name('productAdd')->middleware('auth');

Route::post('product/store', 'ProductController@store')->name('productStore')->middleware('auth');

Route::get('product/show', 'ProductController@show')->name('productShow');

Route::get('product/edit', 'ProductController@edit')->name('productEdit')->middleware('auth');

Route::post('product/update', 'ProductController@update')->name('productUpdate')->middleware('auth');

Route::get('product/delete', 'ProductController@destroy')->name('productDelete')->middleware('auth');

Route::get('category/create', 'CategoryController@create')->name('addCategory')->middleware('auth');

Route::post('category/store', 'CategoryController@store')->name('storeCategory')->middleware('auth');

Route::get('categories/list', 'CategoryController@index')->name('listCategories')->middleware('auth');

Route::get('category/edit', 'CategoryController@edit')->name('editCategory')->middleware('auth');

Route::post('category/update', 'CategoryController@update')->name('updateCategory')->middleware('auth');

Route::get('category/delete', 'CategoryController@destroy')->name('deleteCategory')->middleware('auth');

Route::get('category/show', 'CategoryController@show')->name('showCategory')->middleware('auth');