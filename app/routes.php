<?php
use Goutte\Client;

Route::get('/test', function()
{

	

//	dd('test');
	
	$client = new Client();

	$crawler = $client->request('GET', 'http://en.wikiquote.org/wiki/Thomas_Jefferson');
//
	//how to deal with misattributed quotes?
		//if string contains "misattributed" then remove it
	//this will not catch them all.
	//if parent element is a div with a background color of #FCFCC or #FFE7CC then remove all the chil ul > li's
	
	//how to filter out second li?
	//check to see if previous item x-1 contains string of x
		//if yes, should remove x and keep source in quote text? or remove string from x-1 and then make x string = quote source?
	$quotes = $crawler->filter('ul > li');

//	echo '<pre>';
//	print_r($quotes);
//	echo '</pre>';
//	return;

//	dd($quotes->nodeValue);
	foreach($quotes as $quote)
	{
//		dd($quote);
		
	    var_dump($quote);
	}

	return;

	$quoteArray = [];
	foreach($quotes as $quote)
	{
		if(!is_numeric(substr($quote->nodeValue, 0, 1)))
		{
			array_push($quoteArray, $quote->nodeValue);
		}
	}
	dd($quoteArray);

//	substr($quote, 0, 1);  // abcd
//	foreach($quoteArray as $quote)
//	{
//		if(is_numeric(substr($quote, 0, 1)))
//		{
//			dd('its a number!');
//		}
//		dd($quote);
//	}
	
	
//	$crawler->filter('ul > li')->each(function ($node) {
//		var_dump($node->text());
////		print $node->text()."\n";
//	});

//	dd($crawler);
	
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
