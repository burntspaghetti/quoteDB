<?php

class QuoteController extends BaseController {

	public function create($idPersona)
	{
		$persona = Persona::find($idPersona);

		return View::make('quotes.create')->with('persona', $persona);
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), Quote::$rules);
		if($validator->fails()) {return Redirect::back()->withErrors($validator)->withInput();}
		$quote = Quote::create(Input::all());

		return Redirect::action('PersonaController@showPersona')->with('flash_message', 'New Quote Created.');
	}

}
