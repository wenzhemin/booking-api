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

Route::get('/', 'PagesController@index');
Route::get('/cal', 'PagesController@cal');

Route::resource('bookings', 'BookingsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// future adminpanel routes also should belong to the group
// Route::group(['prefix' => '', 'middleware' => 'can:accessAdminpanel'], function () {
//     // Route::get('/system', 'PagesController@dashboard');
// });
Route::get('/system', 'Admin\DashboardController@dashboard')->name('system');


// only for testing. 
Route::get('/services', 'ServicesController@getAll');