<?php

class LoginController extends BaseController {


	public function login()
	{

		return View::make('login.create');
	}


	public function doLogin()
	{
		$rules = array(
			'email' => 'required|email',
			'password' => 'required|alphaNum'
		);

		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput(Input::except('password'));
		}
		
		if(Auth::attempt(Input::only('email', 'password')))
		{
			return Redirect::intended('/personas');
		}
		else
		{
			Session::put('incorrectPassword', true);
			return Redirect::back()->withInput();
		}

		return Redirect::back()->withInput();
	}


	public function logout()
	{
		Auth::logout();
		return Redirect::action('LoginController@login');
	}

}
