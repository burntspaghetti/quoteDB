<?php

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

	public function storeScrape()
	{
		$input = Input::all();
		//foreach input
		//find persona
		//create new quote
		//set quote text = text
		//set idPersona = idpersona
		//save
	}

}
