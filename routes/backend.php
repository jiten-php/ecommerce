<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Admin CMS Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => 'cms', 'as' => 'admin.', 'namespace' => 'Backend'], function () {


	Route::get('/', 'LoginController@index');
	Route::get('login', 'LoginController@index')->name('login');
	Route::get('register', 'LoginController@signup')->name('signup');
	Route::post('user-authentication','LoginController@authenticate')->name('auth');
	
	Route::middleware(['admin'])->group(function () {
		Route::get('dashboard', 'DashboardController@index')->name('dashboard');
		Route::post('logout', 'LoginController@getSignOut')->name('logout');
		/* user section start here */
		Route::get('users', 'UserController@index')->name('user.list');
		Route::get('add-user', 'UserController@addUser')->name('add.user');
		Route::post('add-user', 'UserController@storeUser')->name('store.user');
		/* user section start here */
/*		Route::resource('contacts', 'ContactController');
		Route::resource('sliders', 'SliderController');*/
		Route::resources([
			'contacts' => 'ContactController',
			'sliders'  => 'SliderController'
		]);

	});
	

});

 /*for frontend and backend ckeditor5 image upload*/

Route::post('ckeditor-image-upload', 'CkeditorController@upload')->name('upload');



