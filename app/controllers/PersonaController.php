<?php

class PersonaController extends BaseController {


	public function personas()
	{
		$personas = Persona::all();

		return View::make('personas.personas')->with('personas', $personas);
	}

	public function showPersona($id)
	{
		$persona = Persona::find($id);
		$quotes = Persona::with('quotes')->find($id)->quotes;

		return View::make('personas.personaShow')->with('persona', $persona)->with('quotes', $quotes);
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

	public function edit($id)
	{
		$persona = Persona::find($id);
		return View::make('personas.edit')->with('persona', $persona);
	}

	public function update()
	{
//		dd(Input::all());
		$validator = Validator::make(Input::all(), Persona::$rules);
		if($validator->fails()) {return Redirect::back()->withErrors($validator)->withInput();}
		$persona = Persona::find(Input::get('id'));
		$persona->fName = Input::get('fName');
		$persona->mName = Input::get('mName');
		$persona->lName = Input::get('lName');
		$persona->bio = Input::get('bio');
		$persona->dateBorn = Input::get('dateBorn');
		$persona->dateDied = Input::get('dateDied');
		$persona->save();

		return Redirect::action('PersonaController@showPersona', $persona->idPersona)->with('flash_message', 'Edit Saved: ' . $persona->fName . " " . $persona->lName);
	}

	public function delete($id)
	{
		$persona = Persona::find($id);
		$persona->delete();

		return Redirect::action('PersonaController@personas')->with('flash_message', 'Persona Deleted: ' . $persona->fName . " " . $persona->lName);
	}
}
