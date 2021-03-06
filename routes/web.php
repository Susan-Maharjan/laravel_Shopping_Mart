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

Route::get('/shop', function () {
    return view('shop.index');
});

Route::get('/mobile', function () {
    return view('category.mobile');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('user','UserController');
Route::resource('product','ProductController'); 
Route::resource('category','CategoryController'); 
Route::resource('subcategory','SubCategoryController'); 

Auth::routes();

Route::get('/home', 'HomeController@index');



Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', 'AdminController@dashboard');
});