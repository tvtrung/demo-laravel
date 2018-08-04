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
	Route::get('configs/basic','ConfigsController@basic')->name('admin.configs.basic');
	Route::post('configs/update','ConfigsController@update')->name('admin.configs.update');

	//images
	Route::get('images/{type}','ImagesController@index')->name('admin.images.index');
	Route::get('images/update_status_ajax/{id}','ImagesController@update_status_ajax')->name('admin.images.update_status_ajax');
	Route::get('images/view/{id}','ImagesController@view')->name('admin.images.view');
	Route::get('images/{type}/delete/{id}','ImagesController@destroy')->name('admin.images.delete');
	Route::get('images/{type}/create','ImagesController@create')->name('admin.images.create');
	Route::post('images/{type}/create','ImagesController@store')->name('admin.images.store');
	Route::get('images/{type}/edit/{id}','ImagesController@edit')->name('admin.images.edit');
	Route::post('images/{type}/edit/{id}','ImagesController@update')->name('admin.images.update');
	Route::get('images/update_order_ajax/{id}','ImagesController@update_order_ajax')->name('admin.images.update_order_ajax');

	//categories post
	Route::get('news/cat','CatNewsController@index')->name('admin.news.cat.index');
	Route::get('news/cat/view/{id}','CatNewsController@view')->name('admin.news.cat.view');
	Route::get('news/cat/create','CatNewsController@create')->name('admin.news.cat.create');
	Route::post('news/cat/create','CatNewsController@store')->name('admin.news.cat.store');
	Route::get('news/cat/edit/{id}','CatNewsController@edit')->name('admin.news.cat.edit');
	Route::post('news/cat/edit/{id}','CatNewsController@update')->name('admin.news.cat.update');
	Route::get('news/cat/delete/{id}','CatNewsController@destroy')->name('admin.news.cat.delete');
	Route::get('news/cat/update_status_ajax/{id}','CatNewsController@update_status_ajax')->name('admin.news.cat.update_status_ajax');
	Route::get('news/cat/update_order_ajax/{id}','CatNewsController@update_order_ajax')->name('admin.news.cat.update_order_ajax');

	//news
	Route::get('news/post','NewsController@index')->name('admin.news.post.index');
	Route::get('news/post/view/{id}','NewsController@view')->name('admin.news.post.view');
	Route::get('news/post/create','NewsController@create')->name('admin.news.post.create');
	Route::post('news/post/create','NewsController@store')->name('admin.news.post.store');
	Route::get('news/post/edit','NewsController@edit')->name('admin.news.post.edit');
	Route::post('news/post/edit','NewsController@update')->name('admin.news.post.update');
	Route::get('news/post/delete/{id}','NewsController@destroy')->name('admin.news.post.delete');
	Route::get('news/post/update_status_ajax/{id}','NewsController@update_status_ajax')->name('admin.news.post.update_status_ajax');
	Route::get('news/post/update_order_ajax/{id}','NewsController@update_order_ajax')->name('admin.news.post.update_order_ajax');

});

Route::get('/',function(){
	echo "Hello World";
});