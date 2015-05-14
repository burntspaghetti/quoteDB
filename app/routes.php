<?php

Route::get('/', function()
{
//	dd(User::all());
	

    User::create([
		'username' => 'test',
		'email' => 'test',
		'password' => Hash::make('test')
	]);
//
	return 'done';
});


Route::resource('sessions', 'SessionsController');

Route::get('/login', 'SessionsController@create');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/home', 'SessionsController@home');

Route::get('/admin', 'SessionsController@admin')->before('auth');


Route::get('/quoteDB', 'HomeController@home');

Route::post('/quoteDB/search', 'HomeController@search');

Route::get('/quoteDB/searchResults', 'HomeController@searchResults');

Route::get('/quoteDB/personas', 'HomeController@personas');

Route::get('/quoteDB/persona/{idPersona}', 'HomeController@showPersona');

Route::get('/test', function()
{
	return View::make('test');
});
