<?php
use Goutte\Client;

Route::get('/test', function()
{
	////////////////////////

	$client = new Client();

	$crawler = $client->request('GET', 'http://en.wikiquote.org/wiki/Thomas_Jefferson');

	$quotes = $crawler->filter('ul > li');

	$quoteArray = [];

	foreach($quotes as $quote)
	{
		if(strpos($quote->nodeValue, 'Create account') !== false)
		{
			break;
		}
		elseif(!is_numeric(substr($quote->nodeValue, 0, 1)))
		{
			array_push($quoteArray, $quote->nodeValue);
		}
	}
	return View::make('quoteFilter')->with('quoteArray', $quoteArray);
	
});

Route::group(array('before' => 'auth'), function()
{
	Route::get('/', 'HomeController@home');

	Route::post('/search', 'HomeController@search');

	Route::get('/searchResults', 'HomeController@searchResults');


	Route::get('/personas', 'PersonaController@personas');

	Route::get('/persona/{idPersona}', 'PersonaController@showPersona');

	Route::get('/personas/create', 'PersonaController@create');

	Route::post('/personas/store', 'PersonaController@store');

	Route::get('/persona/edit/{id}', 'PersonaController@edit');

	Route::post('/persona/update/{id}', 'PersonaController@update');

	Route::get('/persona/delete/{id}', 'PersonaController@delete');


	Route::get('/persona/quotes/create/{idPersona}', 'QuoteController@create');

	Route::post('/persona/quotes/store', 'QuoteController@store');

	Route::get('/persona/quotes/edit/{idPersona}/{idQuote}', 'QuoteController@edit');

	Route::post('/persona/quotes/saveEdit', 'QuoteController@update');

	Route::get('/persona/quotes/delete/{idQuote}', 'QuoteController@delete');

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
