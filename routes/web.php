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

Route::get('/', 'TestController@index');
Route::get('/test/{test}/{test2}', 'TestController@get_variable');

Route::resource('/resources', 'ResourcesController');
// Route::get('/resources/create', 'ResourcesController@create');
// Route::post('/resources', 'ResourcesController@store');


Route::group(['middleware' => 'auth'], function(){
	// Route::get('/contacts', 'ContactsController@index');
	// Route::get('/contacts/create', 'ContactsController@create');
	// Route::post('/contacts', 'ContactsController@store');
	// Route::get('/contacts/{contact}', 'ContactsController@show');
	// Route::get('/contacts/{contact}/edit', 'ContactsController@edit');
	// Route::put('/contacts/{contact}', 'ContactsController@update');
	// Route::delete('/contacts/{contact}', 'ContactsController@destroy');
	Route::resource('/contacts', 'ContactsController');
});

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('/api/test', function(){
		return auth()->user()->toArray();
	});

	Route::post('/api/test', function(){
		return request()->toArray();
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
