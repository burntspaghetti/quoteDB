<?php

class Quote extends Eloquent {

	protected $table = 'quote';
	public $timestamps = false;
	protected $primaryKey = 'idQuote';

	public function persona()
	{
		return $this->hasOne('Persona', 'idPersona');
	}

}
