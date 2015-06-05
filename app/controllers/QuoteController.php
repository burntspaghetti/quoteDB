<?php
use Goutte\Client;

class QuoteController extends BaseController {

	public function create($idPersona)
	{
		$persona = Persona::find($idPersona);

		return View::make('quotes.create')->with('persona', $persona);
	}

	public function store()
	{
		$idPersona = Input::get('idPersona');
		$validator = Validator::make(Input::all(), Quote::$rules);
		if($validator->fails()) {return Redirect::back()->withErrors($validator)->withInput();}
		$quote = Quote::create(Input::all());

		return Redirect::action('PersonaController@showPersona', $idPersona)->with('flash_message', 'New Quote Created.');
	}


	public function edit($idPersona, $idQuote)
	{
		$quote = Quote::find($idQuote);
		$persona = Persona::find($idPersona);

		return View::make('quotes.edit')->with('persona', $persona)->with('quote', $quote);
	}

	public function update()
	{
		$validator = Validator::make(Input::all(), Quote::$rules);
		if($validator->fails()) {return Redirect::back()->withErrors($validator)->withInput();}

		$idQuote = Input::get('idQuote');

		$quote = Quote::find($idQuote);
		$quote->quoteText = Input::get('quoteText');
		$quote->quoteSource1 = Input::get('quoteSource1');
		$quote->quoteSource2 = Input::get('quoteSource2');
		$quote->save();

		return Redirect::action('PersonaController@showPersona', $quote->idPersona)->with('flash_message', 'Quote successfully edited.');
	}

	public function delete($idQuote)
	{
		$quote = Quote::find($idQuote);
		$quote->delete();

		return Redirect::action('PersonaController@showPersona', $quote->idPersona)->with('flash_message', 'Quote deleted.');
	}

	public function scraper($idPersona)
	{
		$persona = Persona::find($idPersona);
		return View::make('personas.scraper')->with('persona', $persona);
	}

	public function scrapeURL()
	{
		$validation = Validator::make(
			Input::all(), array(
				'wikiquoteURL' => 'required'
			)
		);

		if ($validation->fails()) {
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$client = new Client();

		$crawler = $client->request('GET', Input::get('wikiquoteURL'));

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

		$quoteCount = count($quoteArray);
		for($x = 0; $x < $quoteCount - 1; $x++)
		{
			if(strpos($quoteArray[$x], $quoteArray[$x + 1]) !== false)
			{
				unset($quoteArray[$x+1]);
				$quoteArray = array_values($quoteArray);
				$quoteCount = count($quoteArray);
			}
		}

		return View::make('quoteFilter')->with('quoteArray', $quoteArray)->with('idPersona', Input::get('idPersona'));
	}

	public function storeScrape()
	{
		$input = Input::all();

		$idPersona = Input::get('idPersona');

		foreach($input as $quote)
		{
		    if(!is_numeric($quote))
		    {
		        $newQuote = new Quote;
				$newQuote->quoteText = $quote;
				$newQuote->idPersona = $idPersona;
				$newQuote->save();
		    }
		}

		return Redirect::action('PersonaController@showPersona', $idPersona);
	}

}
