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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/bookinglayout', 'PagesController@bookinglayout');
Route::get('/cal', 'BookingsController@index');

Route::resource('bookings', 'BookingsController');
Auth::routes();


// future adminpanel routes also should belong to the group
Route::group(['middleware' => 'auth'], function() {
    // Route::get('/system', function () { $user = \Auth::user();  });
    Route::get('/system', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/admincalendar', 'PagesController@adminbooking');
    // Route::get('/admincalendar', function () { $user = \Auth::user();  });
});


// only for testing. 
Route::get('/services', 'ServicesController@getAll');