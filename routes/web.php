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

Route::get('insert','AppointmentInsertController@insertform');
Route::post('create','AppointmentInsertController@insert');
Route::get('view-appointment','AppointmentViewController@index');
Route::get('doctor-view-appointment','DoctorAppointmentViewController@index');