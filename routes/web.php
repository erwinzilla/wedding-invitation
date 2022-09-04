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

Route::get('/', function () {
    return redirect('/wedding');
});

// wedding example
Route::post('wedding/manage/wish', 'WeddingController@store_wish');
Route::get('wedding/manage/{pin?}', 'WeddingController@index');
Route::get('wedding/{name?}', 'WeddingController@invitation');

Route::resources([
    'att'               => 'AttendanceController',
    'wedding/manage'    => 'WeddingController'
]);
