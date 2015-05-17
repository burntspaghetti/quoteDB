<?php

Route::group(array('before' => 'auth'), function()
{
	Route::get('/quoteDB', 'HomeController@home');

	Route::post('/quoteDB/search', 'HomeController@search');

	Route::get('/quoteDB/searchResults', 'HomeController@searchResults');

	Route::get('/quoteDB/personas', 'HomeController@personas');

	Route::get('/quoteDB/persona/{idPersona}', 'HomeController@showPersona');
});

//Route::get('/', function()
//{
//    User::create([
//		'username' => '',
//		'email' => '',
//		'password' => Hash::make('')
//	]);
//
//	return 'done';
//});


Route::get('/login', 'LoginController@login');
Route::post('/doLogin', 'LoginController@doLogin');
Route::get('/logout', 'LoginController@logout');

