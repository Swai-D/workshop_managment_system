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
use App\Store;
Auth::routes();
Route::get('/home', 'NormalController@auth_user')->name('home');


// Normal Routes
Route::get('/','NormalController@index');
//Auth_user
Route::get('/auth_user','NormalController@auth_user')->middleware('auth_user');
Route::get('/profile','NormalController@profile')->middleware('auth_user');
Route::get('/item_status','NormalController@item_status')->middleware('auth_user');
Route::get('/profile_image', 'NormalController@profile_image');
Route::post('/item_live_search', 'NormalController@auth_user_search');


// Admin Routes
Route::get('/admin_index', 'AdminController@index')->middleware('admin');
Route::get('/admin_input','AdminController@create')->middleware('admin');
Route::post('/input','AdminController@store')->middleware('admin');
Route::post('/output','AdminController@output')->middleware('admin');
Route::get('/admin_report','AdminController@report')->middleware('admin');
Route::get('/basic_table','AdminController@table')->middleware('admin');
Route::post('/live_search','AdminController@search')->middleware('admin');
Route::get('/admin_profile','AdminController@admin_profile')->middleware('admin');
Route::post('/update_profile','AdminController@update_profile')->middleware('admin');
Route::get('/{id}','AdminController@edit_input')->middleware('admin');
Route::PATCH('/{id}','AdminController@update_input')->middleware('admin');
Route::delete('/{id}','AdminController@delete_input')->middleware('admin');
Route::post('/output_edit','AdminController@output')->middleware('admin');

