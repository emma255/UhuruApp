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

// Route::get('welcome', function () {
//     return view('checkimg');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::get('admin', 'HomeController@admin')->name('admin');


// PRODUCTS

Route::get('product/view', 'ProductController@index')->name('fetchProduct');

Route::get('admin/product/view', 'ProductController@indexAdmin')->name('fetchProductAdmin');

Route::get('product/create', 'ProductController@create')->name('productAdd')->middleware('auth');

Route::post('product/store', 'ProductController@store')->name('productStore')->middleware('auth');

Route::get('product/show', 'ProductController@show')->name('productShow');

Route::get('product/edit', 'ProductController@edit')->name('productEdit')->middleware('auth');

Route::post('product/update', 'ProductController@update')->name('productUpdate')->middleware('auth');

Route::get('product/delete', 'ProductController@destroy')->name('productDelete')->middleware('auth');


// CATEGORIES

Route::get('category/create', 'CategoryController@create')->name('addCategory')->middleware('auth');

Route::post('category/store', 'CategoryController@store')->name('storeCategory')->middleware('auth');

Route::get('categories/list', 'CategoryController@index')->name('listCategories')->middleware('auth');

Route::get('category/edit', 'CategoryController@edit')->name('editCategory')->middleware('auth');

Route::post('category/update', 'CategoryController@update')->name('updateCategory')->middleware('auth');

Route::get('category/delete', 'CategoryController@destroy')->name('deleteCategory')->middleware('auth');

Route::get('category/show', 'CategoryController@show')->name('showCategory')->middleware('auth');

// INSTITUTIONS

Route::get('institutions/list', 'LoanController@index')->name('listInstitutions')->middleware('auth');

Route::get('institution/create', 'LoanController@create')->name('addInstitution')->middleware('auth');

Route::post('institution/store', 'LoanController@store')->name('storeInstitution')->middleware('auth');

Route::get('institution/show', 'LoanController@show')->name('showInstitution')->middleware('auth');

Route::get('institution/edit/{id}', 'LoanController@edit')->name('editInstitution')->middleware('auth');

Route::get('institution/delete/{id}', 'LoanController@destroy')->name('deleteInstitution')->middleware('auth');

Route::post('institution/update', 'LoanController@update')->name('updateInstitution')->middleware('auth');

Route::get('loan/request', 'LoanController@loanForm')->name('loanForm')->middleware('auth');

Route::post('loan/request', 'LoanController@requestLoan')->name('loanRequest')->middleware('auth');

Route::get('institute/requested', 'LoanController@requestedInstitute')->name('requestedInstituton')->middleware('auth');


// Trainings
Route::get('trainings/list', 'TrainingController@index')->name('listTrainings')->middleware('auth');

Route::get('training/create', 'TrainingController@create')->name('addTraining')->middleware('auth');

Route::post('training/store', 'TrainingController@store')->name('storeTraining')->middleware('auth');

Route::get('training/show', 'TrainingController@show')->name('showTraining')->middleware('auth');

Route::get('training/edit/{id}', 'TrainingController@edit')->name('editTraining')->middleware('auth');

Route::get('training/delete/{id}', 'TrainingController@destroy')->name('deleteTraining')->middleware('auth');

Route::post('training/update', 'TrainingController@update')->name('updateTraining')->middleware('auth');

Route::get('trains/{id}', 'TrainingController@getTrains')->name('trains')->middleware('auth');

Route::get('train/{id}', 'TrainingController@getTrain')->name('train')->middleware('auth');

//business
Route::get('register/processes', 'BusinessController@index')->name('businessRegister')->middleware('auth');

Route::get('business', 'BusinessController@show')->name('business')->middleware('auth');

Route::get('processes/create', 'BusinessController@create')->name('addProcesses')->middleware('auth');

Route::get('processes/create', 'BusinessController@create')->name('addProcesses')->middleware('auth');

Route::get('processes/edit', 'BusinessController@edit')->name('editProcesses')->middleware('auth');

Route::get('processes/delete', 'BusinessController@destroy')->name('deleteProcesses')->middleware('auth');

Route::post('processes/update', 'BusinessController@update')->name('updateProcesses')->middleware('auth');

Route::post('processes/store', 'BusinessController@store')->name('saveProcesses')->middleware('auth');

//orders
Route::get('order/create', 'OrderController@create')->name('createOrder')->middleware('auth');

Route::get('orders/list', 'OrderController@index')->name('listOrders')->middleware('auth');
    
//searching
Route::get('search', 'ProductController@search')->name('search')->middleware('auth');