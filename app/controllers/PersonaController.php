<?php

class PersonaController extends BaseController {


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

	public function create()
	{
		return View::make('personas.create');
	}

	public function store()
	{
		$validator = Validator::make(Input::all(), Persona::$rules);
		if($validator->fails()) {return Redirect::back()->withErrors($validator)->withInput();}
		$persona = Persona::create(Input::all());

		return Redirect::action('PersonaController@personas')->with('flash_message', 'New Persona Created: ' . $persona->fName . " " . $persona->lName);
	}
}
