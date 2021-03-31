<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('invoie','invoiecontroller')->middleware('auth');

Route::resource('customer','Customer_controller')->middleware('auth');

Route::resource('homepage','IndexController')->middleware('auth');

Route::resource('invoie_data','invoie_datacontroller')->middleware('auth');

Route::get('pdf','PDFController@pdf');

Route::get('data','PFControllerdata@data');

Route::get('data/{id}','PFControllerdata@data');

Route::get('PDFCustomer','PDFCustomer@PDFCustomer');

Route::get('/employees','employeesControlle@index')->middleware('auth');

Route::post('/addimage','employeesControlle@store')->name('addimage');

Route::get('/show_employee','employeesControlle@display')->middleware('auth');

Route::get('/editimage/{id}','employeesControlle@edit')->middleware('auth');

Route::put('/updateimage/{id}','employeesControlle@update')->middleware('auth');

Route::get('/deleteimage/{id}','employeesControlle@delete')->middleware('auth');

Route::get('users/{id}', 'invoie_datacontroller@createForUser')->name('createForUser')->middleware('auth');















