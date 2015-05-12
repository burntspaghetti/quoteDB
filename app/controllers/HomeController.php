<?php

class HomeController extends BaseController {
	
	public function home()
	{
		return View::make('quoteHome');
	}

	public function search()
	{
		$query = Input::get('search');
		$quotes = DB::select( DB::raw("select quote.idQuote, quote.quoteText, quote.quoteSource1, quote.quoteSource2, persona.idPersona, persona.fName, persona.mName, persona.lName
										from quote, persona 
										where quoteText like '%war%'
										and quote.idPersona = persona.idPersona;"));


		return View::make('quoteSearch')->with('quotes', $quotes)
										->with('query', $query);

	}

	public function personas()
	{
		$personas = Persona::all();

		return View::make('personas')->with('personas', $personas);
	}

	public function showPersona($id)
	{
		$persona = Persona::find($id);
		$quotes = Persona::with('quotes')->find($id)->quotes;

		return View::make('personaShow')->with('persona', $persona)->with('quotes', $quotes);
	}

}
