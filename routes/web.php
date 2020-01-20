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
Route::get('/cal/{year?}/{month?}', 'BookingsController@index');

Route::resource('bookings', 'BookingsController');
Auth::routes();

Route::get('image/users/{user_id}/{filename?}', ['as' => 'getuserimage', 'uses' => 'ImageController@getUserImage']);
Auth::routes(['register' => false]);


// future adminpanel routes also should belong to the group
Route::group(['middleware' => 'auth'], function() {
    // Route::get('/system', function () { $user = \Auth::user();  });
    Route::get('/system', 'Admin\DashboardController@index')->name('dashboard');
    Route::get('/choices', 'Admin\DashboardController@choices')->name('choices');
    Route::get('/admincalendar/{year?}/{week?}', 'Admin\CalendarController@index')->name('admincalendar');
    
    Route::resource('/users', 'Admin\UserController');

    Route::post('image/add', ['as' => 'image.addimage', 'uses' => 'ImageController@add']);
    Route::delete('image/delete/{id}', ['as' => 'image.deleteimage', 'uses' => 'ImageController@delete']);
    
    });


// only for testing. 
Route::get('/services', 'ServicesController@getAll');


Route::get('test', function () {
    event(new App\Events\BookingCompleted('Someone'));
    return "Event has been sent!";
});