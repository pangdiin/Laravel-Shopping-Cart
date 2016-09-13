<?php


Route::get('/',[
	'uses'=>'ProductController@getIndex',
	'as'=>'product.index'
	]);



Route::group(['prefix'=> 'user'], function() {
	
	Route::get('/signup',[
	'uses'=>'UserController@getSignup',
	'as'=>'user.signup'
	]);
	
	Route::post('/signup',[
		'uses'=>'UserController@postSignup',
		'as'=>'user.signup'
		]);

	Route::get('/signin',[
		'uses'=>'UserController@getSignin',
		'as'=>'user.signin'
		]);

	Route::post('/signin',[
		'uses'=>'UserController@postSignin',
		'as'=>'user.signin'
		]);

	Route::get('/profile',[
		'uses'=>'UserController@getProfile',
		'as'=>'user.profile'
		]);
	Route::get('/logout',[
		'uses'=>'UserController@getLogout',
		'as'=>'user.logout'
		]);	
});



