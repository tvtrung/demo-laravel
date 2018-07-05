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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home.route');


Route::prefix('admint')->group(function() {
	Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('logout', 'AdminController@logout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('infoadmin', 'AdminController@infoadmin');
});
Route::get('info','MyController@info');