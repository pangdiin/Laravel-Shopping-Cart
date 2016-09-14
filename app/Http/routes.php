<?php


Route::get('/',[
	'uses'=>'ProductController@getIndex',
	'as'=>'product.index'
	]);

Route::get('/add-to-cart/{id}',[
	'uses'=>'ProductController@getAddToCart',
	'as'=>'product.addToCart'
	]);

Route::get('/reduce/{id}',[
	'uses'=>'ProductController@getReduceByOne',
	'as'=>'product.reduceByOne'
	]);

Route::get('/remove/{id}',[
	'uses'=>'ProductController@getRemoveItem',
	'as'=>'product.remove'
	]);

Route::get('/shopping-cart',[
	'uses'=>'ProductController@getCart',
	'as'=>'product.shoppingCart'
	]);

Route::get('/checkout',[
	'uses'=>'ProductController@getCheckout',
	'as'=>'checkout',
	'middleware'=>'auth'
	]);

Route::post('/checkout',[
	'uses'=>'ProductController@postCheckout',
	'as'=>'checkout',
	'middleware'=>'auth'
	]);


Route::group(['prefix'=> 'user'], function() {
	
	// Route::group(['middleware'=>'guest'], function() {	
		
		Route::get('/signup',[
			'uses'=>'UserController@getSignup',
			'as'=>'user.signup',
			'middleware'=>'guest'
		]);

		Route::post('/signup',[
			'uses'=>'UserController@postSignup',
			'as'=>'user.signup',
			'middleware'=>'guest'
			]);

		Route::get('/signin',[
			'uses'=>'UserController@getSignin',
			'as'=>'user.signin',
			'middleware'=>'guest'
			]);

		Route::post('/signin',[
			'uses'=>'UserController@postSignin',
			'as'=>'user.signin',
			'middleware'=>'guest'
			]);	
	// });
	
	// Route::group(['middleware'=>'auth', function() {
		
		Route::get('/profile',[
			'uses'=>'UserController@getProfile',
			'as'=>'user.profile',
			'middleware'=>'auth'
			]);

		Route::get('/logout',[
			'uses'=>'UserController@getLogout',
			'as'=>'user.logout',
			'middleware'=>'auth'
			]);	
	// }]);		
});



