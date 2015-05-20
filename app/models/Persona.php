<?php

class Persona extends Eloquent {

	protected $table = 'persona';
	public $timestamps = false;
	protected $primaryKey = 'idPersona';
	protected  $fillable = array('fName', 'mName', 'lName', 'bio', 'dateBorn', 'dateDied');

	public function quotes()
	{
		return $this->hasMany('Quote', 'idPersona');
	}

	public static $rules = array(
		'fName' => 'required|max:45',
		'mName' => 'max:45',
		'lName' => 'max:45',
		'bio' => 'max:2000',
		'dateBorn' => 'max:45',
		'dateDied' => 'max:45'
	);




//$validator = Validator::make(Input::all(), $rules);
//if($validator->fails())
//{
//return Redirect::back()->withErrors($validator)->withInput();
//}

}
