<?php

class HomeController extends BaseController {
	
	public function home()
	{
		return View::make('quoteHome');
	}

	public function search()
	{
		$query = Input::get('search');
		$quotes = DB::select( DB::raw("select * from quote where quoteText like '%$query%';"));
		

		$personaArray = array();
//		$quoteTagIndex = array();
		foreach($quotes as $quote)
		{
			$persona = Persona::find($quote->idPersona);
			$personaArray[$quote->idPersona] = $persona;

//			$tags = Quote::find($quote->idQuote)->tags;
//			if($tags)
//			{
//				$quoteTagIndex[$quote->idQuote] = $tags;
//			}
		}


//		$personaPhoto = array();
//		foreach($personaArray as $persona)
//		{
//			$photo = DB::select( DB::raw("select * from photo where personaid = $persona->idPersona limit 1"));
//			$personaPhoto[$persona->idPersona] = $photo;
//		}

		return View::make('quoteSearch')->with('quotes', $quotes)
			                            ->with('personaArray', $personaArray)
										->with('query', $query);

	}

}
