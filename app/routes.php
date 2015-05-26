<?php
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;


Route::get('/test', function()
{

	$html = <<<'HTML'
<!DOCTYPE html>
<html>
    <body>
			<ul>
				<li><b>test text</b> <a href="/wiki/Necessity" title="Necessity">Necessity</a> more test text <a href="/wiki/Succeed" title="Succeed" class="mw-redirect">succeed</a>, I <a href="/wiki/Know" title="Know" class="mw-redirect">know</a> it, the less uneasiness I shall have to go through..</b>
					<ul>
						<li><a rel="nofollow" class="external text" href="http://oll.libertyfund.org/?option=com_staticxt&amp;staticfile=show.php%3Ftitle=800&amp;chapter=85791&amp;layout=html&amp;Itemid=27">Letter to John Page (15 July 1763); published in <i>The Works of Thomas Jefferson</i> (1905)</a>.</li>
					</ul>
				</li>
			</ul>
    </body>
</html>
HTML;

	$crawler = new Crawler($html);

//	foreach ($crawler as $domElement) {
//		print $domElement->nodeName;
//	}

//	$crawler = $crawler->filterXPath('descendant-or-self::ul/li');
	$crawler = $crawler->filter('ul > li');
	dd($crawler);
	

//	$html = <<<'HTML'
//			<!DOCTYPE html>
//			<html>
//				<body>
//					<ul>
//						<li><b>test text</b> <a href="/wiki/Necessity" title="Necessity">Necessity</a> more test text <a href="/wiki/Succeed" title="Succeed" class="mw-redirect">succeed</a>, I <a href="/wiki/Know" title="Know" class="mw-redirect">know</a> it, the less uneasiness I shall have to go through..</b>
//							<ul>
//								<li><a rel="nofollow" class="external text" href="http://oll.libertyfund.org/?option=com_staticxt&amp;staticfile=show.php%3Ftitle=800&amp;chapter=85791&amp;layout=html&amp;Itemid=27">Letter to John Page (15 July 1763); published in <i>The Works of Thomas Jefferson</i> (1905)</a>.</li>
//							</ul>
//						</li>
//					</ul>
//				</body>
//			</html>
//HTML;
//
//
//	$crawler = new Crawler($html);
//
//	foreach ($crawler as $domElement) {
//		print $domElement->nodeName;
//	}


//	dd('test');
	
//	$client = new Client();
//
//	$crawler = $client->request('GET', 'http://en.wikiquote.org/wiki/Thomas_Jefferson');
//
//	$crawler->filter('ul > li')->each(function ($node) {
//		print $node->text()."\n";
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
