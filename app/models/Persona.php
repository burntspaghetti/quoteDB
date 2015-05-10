<?php

class Persona extends Eloquent {

	protected $table = 'persona';
	public $timestamps = false;
	protected $primaryKey = 'idPersona';

	public function quotes()
	{
		return $this->hasMany('Quote', 'idPersona');
	}

}
