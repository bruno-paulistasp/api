<?php
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {
	Route::post('signin', 'AuthController@login');
	Route::post('signout', 'AuthController@logout');
});

Route::get('me', 'UserController@me');

Route::group(['prefix' => 'account'], function() {
	Route::get('balance', 'AccountController@balance');
	Route::post('deposit', 'AccountController@deposit');
	Route::post('takeout', 'AccountController@takeOut');
});

