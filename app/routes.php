<?php

Route::group(array('before' => 'auth'), function()
{
	Route::get('/quoteDB', 'HomeController@home');

	Route::post('/quoteDB/search', 'HomeController@search');

	Route::get('/quoteDB/searchResults', 'HomeController@searchResults');

	Route::get('/quoteDB/personas', 'PersonaController@personas');

	Route::get('/quoteDB/persona/{idPersona}', 'PersonaController@showPersona');

	Route::get('/quoteDB/personas/create', 'PersonaController@create');

	Route::post('quoteDB/personas/store', 'PersonaController@store');

	Route::get('/quoteDB/persona/edit/{id}', 'PersonaController@edit');

	Route::post('/quoteDB/persona/update/{id}', 'PersonaController@update');

	Route::get('quoteDB/persona/delete/{id}', 'PersonaController@delete');


	Route::get('/quoteDB/persona/quotes/create/{idPersona}', 'QuoteController@create');

	Route::post('/quoteDB/persona/quotes/store', 'QuoteController@store');
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

