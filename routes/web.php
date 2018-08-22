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
Route::resource('passports','ProposalformController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// route for activating the user
Route::get('/verify-user/5454', 'Auth\RegisterController@activateUser')->name('activate.user');
