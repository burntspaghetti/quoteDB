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
		$rules = array(
			'fName' => 'required|max:45',
			'mName' => 'max:45',
			'lName' => 'max:45',
			'bio' => 'max:2000',
			'DOB' => 'max:45',
			'DOD' => 'max:45'
		);

		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$persona = New Persona;
		$persona->fName = Input::get('fName');
		$persona->mName = Input::get('mName');
		$persona->lName = Input::get('lName');
		$persona->bio = Input::get('bio');
		$persona->dateBorn = Input::get('DOB');
		$persona->dateDied = Input::get('DOD');
		$persona->save();

		return Redirect::action('PersonaController@personas')->with('flash_message', 'New Persona Created: ' . $persona->fName . " " . $persona->lName);
	}
}
