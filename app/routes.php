<?php
use Goutte\Client;

Route::get('/test', function()
{
	////////////////////////
	$quoteArray = ['To begin an affair of that kind now, and carry it on so long a time in form, is by no means a proper plan … whatever assurances I may give her in private of my esteem for her, or whatever assurances I may ask in return from her, depend on it — they must be kept in private. Necessity will oblige me to proceed in a method which is not generally thought fair; that of treating with a ward before obtaining the approbation of her guardian. I say necessity will oblige me to it, because I never can bear to remain in suspense so long a time. If I am to succeed, the sooner I know it, the less uneasiness I shall have to go through. If I am to meet with a disappointment, the sooner I know it, the more of life I shall have to wear it off: and if I do meet with one, I hope in God, and verily believe; it will be the last. Letter to John Page (15 July 1763); published in The Works of Thomas Jefferson (1905).',
		'Letter to John Page (15 July 1763); published in The Works of Thomas Jefferson (1905).',
		'blah',
		'The most fortunate of us, in our journey through life, frequently meet with calamities and misfortunes which may greatly afflict us; and, to fortify our minds against the attacks of these calamities and misfortunes, should be one of the principal studies and endeavours of our lives. The only method of doing this is to assume a perfect resignation to the Divine will, to consider that whatever does happen, must happen; and that by our uneasiness, we cannot prevent the blow before it does fall, but we may add to its force after it has fallen. These considerations, and others such as these, may enable us in some measure to surmount the difficulties thrown in our way; to bear up with a tolerable degree of patience under this burthen of life; and to proceed with a pious and unshaken resignation, till we arrive at our journey’s end, when we may deliver up our trust into the hands of him who gave it, and receive such reward as to him shall seem proportioned to our merit. Such, dear Page, will be the language of the man who considers his situation in this life, and such should be the language of every man who would wish to render that situation as easy as the nature of it will admit. Few things will disturb him at all: nothing will disturb him much. Letter to John Page (15 July 1763); published in The Works of Thomas Jefferson (1905).',
		'Letter to John Page (15 July 1763); published in The Works of Thomas Jefferson (1905).',
		'A lively and lasting sense of filial duty is more effectually impressed on the mind of a son or daughter by reading King Lear, than by all the dry volumes of ethics, and divinity, that ever were written. Letter to Robert Skipwith (3 August 1771) ; also in The Writings of Thomas Jefferson (19 Vols., 1905) edited by Andrew A. Lipscomb and Albert Ellery Bergh, Vol. 4, p. 239.',
		'Letter to Robert Skipwith (3 August 1771) ; also in The Writings of Thomas Jefferson (19 Vols., 1905) edited by Andrew A. Lipscomb and Albert Ellery Bergh, Vol. 4, p. 239.'
	];
//
	$quoteCount = count($quoteArray);

	for($x = 0; $x < $quoteCount; $x++)
	{
		if(strpos($quoteArray[$x], $quoteArray[$x + 1]) !== false)
		{
			unset($quoteArray[$x+1]);
			$quoteArray = array_values($quoteArray);
//			dd($quoteArray);

			$quoteCount = count($quoteArray);
//			dd($quoteCount);

			

		}
	}

//
	dd($quoteArray);



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
//
//
//	$quoteCount = count($quoteArray);
////	dd($quoteCount);
//
//	for($x = 0; $x < $quoteCount; $x++)
//	{
//
//	}
	
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
