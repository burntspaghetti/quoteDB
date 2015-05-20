<?php

class Quote extends Eloquent {

	protected $table = 'quote';
	public $timestamps = false;
	protected $primaryKey = 'idQuote';
	protected  $fillable = array('quoteText', 'quoteSource1', 'quoteSource2', 'idPersona');

	public function persona()
	{
		return $this->hasOne('Persona', 'idPersona');
	}

	public static $rules = array(
		'quoteText' => 'required|max:20000',
		'quoteSource1' => 'max:100',
		'quoteSource2' => 'max:100'
	);

}
