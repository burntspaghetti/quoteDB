<?php

Route::get('/quoteDB', 'HomeController@home');

Route::post('/quoteDB/search', 'HomeController@search');

Route::get('/quoteDB/searchResults', 'HomeController@searchResults');

Route::get('/quoteDB/personas', 'HomeController@personas');

Route::get('/quoteDB/persona/{idPersona}', 'HomeController@showPersona');

Route::get('/test', function()
{
	return View::make('test');
});
