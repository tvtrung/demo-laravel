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

// Route::get('/', function(){
// 	echo "123";
// });
Route::get('/', 'MyController@readItems');
Route::post( '/{id?}', 'MyController@processItem' );
Route::get('/test-ckeditor', 'MyController@ckeditor');
Route::get('/uploadPhotoCkeditor', 'MyController@uploadPhotoCkeditor')->name('uploadPhotoCkeditor');
