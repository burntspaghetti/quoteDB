<?php

class SessionsController extends BaseController {

	public function create()
	{
		//see also Auth::guest
		if (Auth::check()) return Redirect::to('/admin');
		return View::make('sessions.create');
	}


	public function admin()
	{
		dd('welcome ' . Auth::user()->username);

	}


	public function store()
	{

		if(Auth::attempt(Input::only('email', 'password')))
		{
		    	return "Welcome " . Auth::user()->username;
		}

		return Redirect::back()->withInput();


		return 'Access Denied.';

//		User::create([
//			'username' => 'JeffreyWay',
//			'email' => 'jeffrey@laracasts.com',
//			'password' => Hash::make('changeme')
//		]);

		return View::make('sessions.home');
	}


	public function home()
	{
		dd('home');

	}

	public function destroy()
	{
		Auth::logout();

		return Redirect::route('sessions.create');
	}

}
