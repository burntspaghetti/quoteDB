<?php

Route::get('/quoteDB', 'HomeController@home');

Route::post('/quoteDB/search', 'HomeController@search');

Route::get('/quoteDB/searchResults', 'HomeController@searchResults');

Route::get('/test', function()
{
	return View::make('test');
});
