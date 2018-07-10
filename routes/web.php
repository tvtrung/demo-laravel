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
	Route::post('admins/create','AdminsManagerController@createPost')->name('admin.admins.createPost');
	Route::get('admins/delete/{id}','AdminsManagerController@delete')->name('admin.admins.delete');

	//users
	Route::get('users','UsersController@index')->name('admin.users.index');
	Route::get('users/create','UsersController@create')->name('admin.users.create');
	Route::post('users/create','UsersController@createPost')->name('admin.users.createPost');
	Route::get('users/delete/{id}','UsersController@delete')->name('admin.users.delete');
});
Route::get('/',function(){
	echo "Hello World";
});