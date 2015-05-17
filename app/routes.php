<?php


Route::get('/blah', function()
{
	dd('blah');

});

Route::group(array('before' => 'auth'), function()
{
	Route::get('/quoteDB', 'HomeController@home');

	Route::post('/quoteDB/search', 'HomeController@search');

	Route::get('/quoteDB/searchResults', 'HomeController@searchResults');

	Route::get('/quoteDB/personas', 'HomeController@personas');

	Route::get('/quoteDB/persona/{idPersona}', 'HomeController@showPersona');
   Route::get('/testing', function()
   {
	   dd('you made it');
   });
});

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






//Route::resource('login', 'SessionsController');

Route::get('/login', 'LoginController@login');
Route::post('/doLogin', 'LoginController@doLogin');

//Route::get('/logout', 'SessionsController@destroy');

Route::get('/logout', 'LoginController@logout');

//Route::get('/home', 'SessionsController@home');

//Route::get('/admin', 'SessionsController@admin')->before('auth');




Route::get('/test', function()
{
	return View::make('test');
});
