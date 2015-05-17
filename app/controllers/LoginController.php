<?php

class LoginController extends BaseController {


	public function login()
	{
		return View::make('login.create');
	}


	public function doLogin()
	{
		if(Auth::attempt(Input::only('email', 'password')))
		{
			return Redirect::intended('/quoteDB');
		}

		return Redirect::back()->withInput();
	}


	public function logout()
	{
		Auth::logout();
		return Redirect::action('LoginController@login');
	}

}
