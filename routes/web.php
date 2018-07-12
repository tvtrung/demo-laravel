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
	//Profile
	Route::get('profile','ProfileController@index')->name('admin.profile.index');
	Route::post('profile/updatePersonal','ProfileController@update_personal_info')->name('admin.profile.update_personal_info');
	Route::post('profile/updateAvatar','ProfileController@update_avatar')->name('admin.profile.update_avatar');
	Route::post('profile/updatePassword','ProfileController@update_password')->name('admin.profile.update_password');

	//admins
	Route::get('admins','AdminsManagerController@index')->name('admin.admins.index');
	Route::get('admins/create','AdminsManagerController@create')->name('admin.admins.create');
	Route::post('admins/create','AdminsManagerController@store')->name('admin.admins.store');
	Route::get('admins/delete/{id}','AdminsManagerController@destroy')->name('admin.admins.delete');
	Route::get('admins/view/{id}','AdminsManagerController@view')->name('admin.admins.view');
	Route::get('admins/edit/{id}','AdminsManagerController@edit')->name('admin.admins.edit');
	Route::post('admins/edit/{id}','AdminsManagerController@update')->name('admin.admins.update');

	//users
	Route::get('users','UsersManagerController@index')->name('admin.users.index');
	Route::get('users/create','UsersManagerController@create')->name('admin.users.create');
	Route::post('users/create','UsersManagerController@store')->name('admin.users.store');
	Route::get('users/delete/{id}','UsersManagerController@destroy')->name('admin.users.delete');
	Route::get('users/view/{id}','UsersManagerController@view')->name('admin.users.view');
	Route::get('users/edit/{id}','UsersManagerController@edit')->name('admin.users.edit');
	Route::post('users/edit/{id}','UsersManagerController@update')->name('admin.users.update');

	//configs
	Route::get('configs/infomation','ConfigsController@infomation')->name('admin.configs.info');
	Route::post('configs/infomation','ConfigsController@update')->name('admin.configs.update');
});


Route::get('/',function(){
	echo "Hello World";
});