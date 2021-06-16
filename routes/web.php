<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',  'WelcomeController@index');
Route::get('ajax_axygen_list', 'WelcomeController@ajaxOxygenList');
Route::get('/supplier-signup','Auth\RegisterController@index')->name('supplier-signup');
Route::post('/supplier-create','Auth\RegisterController@create')->name('supplier-create');


Auth::routes();


Route::group(['prefix' => 'booking'], function () {     
  Route::get('ajax_city_list', 'BookingController@ajaxCityList');
  Route::get('ajax_cylinder_list', 'BookingController@ajaxCylinderList');           
}); 
Route::get('booking', 'BookingController@index')->name('booking');
Route::post('booking-create', 'BookingController@create')->name('booking-create');

Route::get('/home', 'DashboardController@index')->name('supplier-dashboard');
Route::get('ajax_booking_status_change', 'DashboardController@ajaxBookingStatus');           
Route::get('supplier-profile', 'DashboardController@profile')->name('supplier-profile');
Route::get('supplier-bookings', 'DashboardController@bookings')->name('supplier-bookings');

