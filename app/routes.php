<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
//	$image = Image::make(public_path() . '/images/mtn.jpg')->response('jpg');
//	return $image;


	return View::make('home', compact('image'));
});

Route::get('/test', function()
{
	return View::make('test');
});

Route::get('/test2', function()
{
	return View::make('test2');
});

Route::get('/test3', function()
{
	return View::make('test3');
});

//clean blog
Route::get('/test4', function()
{
	return View::make('test4');
});

//dashboard
Route::get('/test5', function()
{
	return View::make('test5');
});

//blog post
Route::get('/test6', function()
{
	return View::make('test6');
});

//blog home
Route::get('/test7', function()
{
	return View::make('test7');
});

//slate
Route::get('/test8', function()
{
	return View::make('test8');
});

Route::get('/test9', function()
{
//	dd('test');
	return View::make('test9');
});

Route::get('/quoteDB', 'HomeController@home');

Route::post('/quoteDB/search', 'HomeController@search');

//incomplete. lots of extra files. would be faster to scrape than to copy paste
//Route::get('/test10', function()
//{
//	return View::make('test10');
//});